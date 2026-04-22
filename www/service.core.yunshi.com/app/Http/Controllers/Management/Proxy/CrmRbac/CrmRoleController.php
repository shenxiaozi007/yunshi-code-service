<?php

namespace App\Http\Controllers\Management\Proxy\CrmRbac;

use App\Exceptions\Common\AppException;
use App\Exceptions\Common\AuthException;
use App\Exceptions\Management\CrmUserException;
use App\Kernel\Base\BaseController;
use App\Modules\Management\Business\CrmRbac\CrmRoleBusiness;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CrmRoleController extends BaseController
{
    /**
     * 存储角色
     * @param Request         $request
     * @param CrmRoleBusiness $business
     * @return array|JsonResponse|null
     * @throws ValidationException|AuthException
     */
    public function store(Request $request, CrmRoleBusiness $business)
    {
        $data = $request->only(
            [
                'name',
                'remark',
            ]
        );

        $data['add_admin_id']   = management_auth_info_id();
        $data['add_admin_name'] = management_auth_info_name();

        return $this->revert($business->store($data));
    }

    /**
     * 复制角色
     * @param Request         $request
     * @param CrmRoleBusiness $business
     * @return array|JsonResponse|null
     * @throws \Throwable
     */
    public function copy(Request $request, CrmRoleBusiness $business)
    {
        $data = $request->only(
            [
                'role_no',
                'name',
                'remark',
            ]
        );

        if (blank($roleNo = array_pull($data, 'role_no')))
        {
            throw new AppException(100003);
        }

        $business->copy($roleNo, $data, management_auth_info());

        return $this->revert([]);
    }

    /**
     * 角色列表
     * @param Request         $request
     * @param CrmRoleBusiness $business
     * @return array|JsonResponse|null
     * @throws AppException
     */
    public function getPageList(Request $request, CrmRoleBusiness $business)
    {
        $payload = $request->all();

        return $this->revert($business->getPageList($payload));
    }

    /**
     * 角色列表
     * @param Request         $request
     * @param CrmRoleBusiness $business
     * @return array|JsonResponse|null
     * @throws AppException
     */
    public function selectList(Request $request, CrmRoleBusiness $business)
    {
        $payload = $request->all();

        return $this->revert($business->selectList($payload));
    }

    /**
     * 获取角色详情
     * @param Request         $request
     * @param CrmRoleBusiness $business
     * @return array|JsonResponse|null
     * @throws AppException
     * @throws ValidationException
     */
    public function detail(Request $request, CrmRoleBusiness $business)
    {
        $payload = $this->validate($request, [
            'role_no' => ['required', 'string'],
        ], [], [
            'role_no' => '角色编号',
        ]);

        return $this->revert($business->findByMainNo(array_get($payload, 'role_no', '')));
    }

    /**
     * 修改角色信息
     * @param Request         $request
     * @param CrmRoleBusiness $business
     * @return array|JsonResponse|null
     * @throws AppException
     * @throws AuthException
     * @throws CrmUserException
     */
    public function update(Request $request, CrmRoleBusiness $business)
    {
        $data = $request->only(
            [
                'role_no',
                'name',
                'remark',
            ]
        );

        if (blank($roleNo = array_pull($data, 'role_no')))
        {
            throw new AppException(100003);
        }

        $business->update($roleNo, $data, management_auth_info());

        return $this->revert(null);
    }

    /**
     * 批量更新在职员工角色
     * @param Request         $request
     * @param CrmRoleBusiness $business
     * @return array|JsonResponse|null
     * @throws AppException
     * @throws ValidationException
     */
    public function batchSetUserRole(Request $request, CrmRoleBusiness $business)
    {
        $payload = $this->validate($request, [
            'role_no'      => ['required', 'string'],
            'role_user_no' => ['nullable', 'array'],
        ], [], [
            'role_no'      => '角色编号',
            'role_user_no' => '角色人员编号',
        ]);

        return $this->revert($business->batchSetUserRole($payload));
    }

    /**
     * 删除角色
     * @param Request         $request
     * @param CrmRoleBusiness $business
     * @return JsonResponse|array|null
     */
    public function delete(Request $request, CrmRoleBusiness $business): JsonResponse|array|null
    {
        $business->delete($request->all(), management_auth_info());

        return $this->revert(null);
    }
}
