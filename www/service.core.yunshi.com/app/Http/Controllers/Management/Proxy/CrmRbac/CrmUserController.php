<?php

namespace App\Http\Controllers\Management\Proxy\CrmRbac;

use App\Exceptions\Common\AppException;
use App\Exceptions\Common\AuthException;
use App\Exceptions\Management\CrmUserException;
use App\Kernel\Base\BaseController;
use App\Modules\Basics\Constant\Sales\AccountStatus;
use App\Modules\Management\Business\CrmRbac\CrmUserBusiness;
use App\Modules\Management\Business\System\CrmOperationLogBusiness;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Laravel\Lumen\Http\ResponseFactory;
use Throwable;

class CrmUserController extends BaseController
{
    /**
     * 存储
     * @param Request $request
     * @param CrmUserBusiness $business
     * @return array|JsonResponse|null
     * @throws AuthException
     * @throws Throwable
     */
    public function store(Request $request, CrmUserBusiness $business)
    {
        $adminInfo = [
            'add_admin_id'   => management_auth_info_id(),
            'add_admin_name' => management_auth_info_name(),
        ];

        return $this->revert(
            $business->store($request->all(), $adminInfo)
        );
    }

    /**
     * 员工详情
     * @param Request $request
     * @param CrmUserBusiness $business
     * @return array|JsonResponse|null
     * @throws AppException
     */
    public function detail(Request $request, CrmUserBusiness $business)
    {
        if (blank($userNo = $request->input('user_no')))
        {
            throw new AppException(100003);
        }

        return $this->revert($business->detail($userNo));
    }

    /**
     * 成员列表
     * @param Request $request
     * @param CrmUserBusiness $business
     * @return array|JsonResponse|null
     * @throws AppException|ValidationException
     */
    public function getPageList(Request $request, CrmUserBusiness $business)
    {
        $payload = $request->only([
            'real_name_like', 'job_sn_like', 'account_status', 'company_no', 'mobile_like', 'register_at_start',
            'register_at_end', 'resignation_at_start', 'resignation_at_end', 'role_no', 'department_no',
            'manpower_type_arr',
        ]);

        return $this->revert($business->getPageList($payload));
    }

    /**
     * 成员列表，不分页
     * @param Request $request
     * @param CrmUserBusiness $business
     * @return array|JsonResponse|null
     * @throws AppException|ValidationException
     */
    public function selectList(Request $request, CrmUserBusiness $business)
    {
        $payload = $request->only([
            'real_name_like', 'account_status', 'company_no','company_id', 'identity', 'page', 'page_size', 'position_grade_lt',
            'empty_department_no', 'department_no',
        ]);

        return $this->revert($business->selectList($payload));
    }

    /**
     * 更新
     * @param Request $request
     * @param CrmUserBusiness $business
     * @return array|JsonResponse|null
     * @throws AppException|ValidationException|AuthException
     * @throws CrmUserException
     */
    public function update(Request $request, CrmUserBusiness $business)
    {
        $data = $request->only([
            'user_no', 'mobile', 'email', 'register_at', 'company_no', 'department_no', 'position_id', 'detail',
            'contract_type', 'avatar_id', 'identity', 'ascription_user_no','account','adviser_is_receive_customer',
            'expert_is_receive_customer', 'wxid', 'manpower_type',
        ]);

        if (blank($userNo = array_pull($data, 'user_no')))
        {
            throw new AppException(100003);
        }

        $adminInfo = [
            'edit_admin_id'   => management_auth_info_id(),
            'edit_admin_name' => management_auth_info_name(),
            'account'         => management_auth_info('account')
        ];

        return $this->revert(
            $business->update($userNo, $data, $adminInfo)
        );
    }

    /**
     * 离职
     * @param Request $request
     * @param CrmUserBusiness $business
     * @return array|JsonResponse|null
     * @throws AppException|AuthException|ValidationException|CrmUserException
     */
    public function dimission(Request $request, CrmUserBusiness $business)
    {
        $payload = $request->all();

        if (blank($userNo = array_pull($payload, 'user_no')))
        {
            throw new AppException(100003);
        }

        $business->dimission($userNo, $payload, management_auth_info());

        return $this->revert(null);
    }

    /**
     * 修改密码
     * @param Request $request
     * @param CrmUserBusiness $business
     * @return array|JsonResponse|null
     * @throws AppException
     * @throws ValidationException
     * @throws AuthException
     */
    public function updatePassword(Request $request, CrmUserBusiness $business)
    {
        $payload = $request->only([
            'account', 'new_password', 'confirm_new_password'
        ]);

        if (blank($account = array_pull($payload, 'account', '')))
        {
            throw new AppException(100003);
        }

        return $this->revert($business->updatePassword($account, $payload,management_auth_info()));
    }

    /**
     * 修改员工角色
     * @param Request $request
     * @param CrmUserBusiness $business
     * @return array|JsonResponse|null
     * @throws AppException
     * @throws ValidationException
     * @throws CrmUserException
     */
    public function updateRole(Request $request, CrmUserBusiness $business)
    {
        $data = $request->only([
            'user_no', 'role_no', 'identity',
        ]);

        if (blank($userNo = array_pull($data, 'user_no')))
        {
            throw new AppException(100003);
        }

        return $this->revert(
            $business->updateRole($userNo, $data)
        );
    }

    /**
     * 生成模拟登录鉴权链接
     * @param Request $request
     * @param CrmUserBusiness $business
     * @return array|JsonResponse|null
     * @throws AuthException|AppException
     */
    public function generateAuthLink(Request $request, CrmUserBusiness $business)
    {
        if (blank($userNo = $request->input('user_no')))
        {
            throw new AppException(100003);
        }

        $url = $business->generateAuthLink($userNo, management_auth_info());

        return $this->revert(['url' => $url]);
    }

    /**
     * 修改员工状态
     *
     * @param Request $request
     * @param CrmUserBusiness $business
     * @return array|Response|ResponseFactory
     * @throws ValidationException
     * @throws AuthException
     * @throws AppException
     */
    public function modifyStatus(Request $request, CrmUserBusiness $business): JsonResponse|array|null
    {
        $payload = $this->validate($request, [
            'user_no'        => 'required',
            'account_status' => ['required', Rule::in(AccountStatus::all())],
        ]);

        $business->modifyStatus($payload['user_no'],$payload['account_status'],management_auth_info());

        return $this->revert(null);
    }

    /**
     * 强制退出登录
     *
     * @param Request $request
     * @param CrmUserBusiness $business
     * @return array|JsonResponse|null
     * @throws AppException
     */
    public function forceLogout(Request $request, CrmUserBusiness $business): JsonResponse|array|null
    {
        $userNo = (string) $request->input('user_no');

        $business->forceLogoutByUserNo($userNo);

        return $this->revert(null);
    }

    /**
     * 获取某个crm用户登录日志列表
     *
     * @param Request $request
     * @param CrmOperationLogBusiness $crmOperationLogBusiness
     * @return array|JsonResponse|null
     * @throws AppException
     * @throws \Illuminate\Validation\ValidationException
     */
    public function getLoginLogsByUserNo(Request $request, CrmOperationLogBusiness $crmOperationLogBusiness): JsonResponse|array|null
    {
        $this->validate($request, [
            'user_no' => 'required',
        ], [], [
            'user_no' => '员工编号',
        ]);

        return $this->revert($crmOperationLogBusiness->getLoginLogsByUserNo((string)$request->input('user_no')));
    }

}
