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

/**
 * crm管理员控制器
 * Class CrmUserController
 * @package App\Http\Controllers\Management\Proxy\CrmRbac
 *
 * ============================================================================
 * 路由配置 (routes/management/proxy/crm_rbac/user.php)
 * ============================================================================
 * 路由前缀: crm-rbac/user
 * 命名空间: CrmRbac
 * 中间件: auth:jwt-management
 *
 * 路由列表:
 * POST /crm-rbac/user/store
 *   - 方法: store(Request $request, CrmUserBusiness $business)
 *   - 路由名称: MANAGEMENT_CRM_USER_STORE
 *   - 说明: 存储/添加CRM员工
 *
 * POST /crm-rbac/user/update
 *   - 方法: update(Request $request, CrmUserBusiness $business)
 *   - 路由名称: MANAGEMENT_CRM_USER_UPDATE
 *   - 说明: 更新员工信息
 *   - 参数: user_no, mobile, email, register_at, company_no, department_no, position_id, detail, contract_type, avatar_id, identity, ascription_user_no, account, adviser_is_receive_customer, expert_is_receive_customer, wxid, manpower_type
 *
 * GET  /crm-rbac/user/detail
 *   - 方法: detail(Request $request, CrmUserBusiness $business)
 *   - 路由名称: MANAGEMENT_CRM_USER_DETAIL
 *   - 说明: 员工详情（需要user_no参数）
 *
 * GET  /crm-rbac/user/get-page-list
 *   - 方法: getPageList(Request $request, CrmUserBusiness $business)
 *   - 路由名称: MANAGEMENT_CRM_USER_GET_PAGE_LIST
 *   - 说明: 成员分页列表
 *   - 参数: real_name_like, job_sn_like, account_status, company_no, mobile_like, register_at_start, register_at_end, resignation_at_start, resignation_at_end, role_no, department_no, manpower_type_arr
 *
 * GET  /crm-rbac/user/select-list
 *   - 方法: selectList(Request $request, CrmUserBusiness $business)
 *   - 路由名称: AUTH_NEEDLESS (无需认证)
 *   - 说明: 成员下拉列表，不分页
 *   - 参数: real_name_like, account_status, company_no, company_id, identity, page, page_size, position_grade_lt, empty_department_no, department_no
 *
 * POST /crm-rbac/user/update-password
 *   - 方法: updatePassword(Request $request, CrmUserBusiness $business)
 *   - 路由名称: MANAGEMENT_CRM_USER_UPDATE_PASSWORD
 *   - 说明: 修改密码（需要account, new_password, confirm_new_password参数）
 *
 * POST /crm-rbac/user/update-role
 *   - 方法: updateRole(Request $request, CrmUserBusiness $business)
 *   - 路由名称: MANAGEMENT_CRM_USER_UPDATE_ROLE
 *   - 说明: 修改员工角色（需要user_no, role_no, identity参数）
 *
 * POST /crm-rbac/user/dimission
 *   - 方法: dimission(Request $request, CrmUserBusiness $business)
 *   - 路由名称: MANAGEMENT_CRM_USER_DIMISSION
 *   - 说明: 离职（需要user_no参数）
 *
 * POST /crm-rbac/user/generate-auth-link
 *   - 方法: generateAuthLink(Request $request, CrmUserBusiness $business)
 *   - 路由名称: MANAGEMENT_CRM_USER_GENERATE_AUTH_LINK
 *   - 说明: 生成模拟登录鉴权链接（需要user_no参数）
 *
 * POST /crm-rbac/user/modify-status
 *   - 方法: modifyStatus(Request $request, CrmUserBusiness $business)
 *   - 路由名称: MANAGEMENT_CRM_USER_MODIFY_STATUS
 *   - 说明: 修改员工状态
 *   - 验证规则:
 *     - user_no: required
 *     - account_status: required, in(AccountStatus::all())
 *
 * GET  /crm-rbac/user/force-logout
 *   - 方法: forceLogout(Request $request, CrmUserBusiness $business)
 *   - 路由名称: MANAGEMENT_CRM_USER_FORCE_LOGOUT
 *   - 说明: 强制员工退出登录（需要user_no参数）
 *
 * GET  /crm-rbac/user/login-log/page-list
 *   - 方法: getLoginLogsByUserNo(Request $request, CrmOperationLogBusiness $crmOperationLogBusiness)
 *   - 路由名称: MANAGEMENT_CRM_USER_LOGIN_LOG_PAGE_LIST
 *   - 说明: 获取某个CRM用户登录日志列表（需要user_no参数）
 * ============================================================================
 */
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
