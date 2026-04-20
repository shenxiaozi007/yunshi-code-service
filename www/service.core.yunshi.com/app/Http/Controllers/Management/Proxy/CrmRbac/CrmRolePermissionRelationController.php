<?php

namespace App\Http\Controllers\Management\Proxy\CrmRbac;

use App\Exceptions\Common\AppException;
use App\Kernel\Base\BaseController;
use App\Modules\Basics\Constant\Rbac\EncryptionOption;
use App\Modules\Basics\Constant\Rbac\SysTerminal;
use App\Modules\Management\Business\CrmRbac\CrmRolePermissionRelationBusiness;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Throwable;

/**
 * crm角色权限分配
 * Class CrmRolePermissionRelationController
 * @package App\Http\Controllers\Management\Proxy\CrmRbac
 */
class CrmRolePermissionRelationController extends BaseController
{
    /**
     * 分配权限
     * @param Request $request
     * @param CrmRolePermissionRelationBusiness $business
     * @return array|JsonResponse|null
     * @throws AppException
     * @throws Throwable
     */
    public function update(Request $request, CrmRolePermissionRelationBusiness $business): JsonResponse|array|null
    {
        $payload = $request->all();

        $adminInfo = [
            'edit_admin_id'   => management_auth_info_id(),
            'edit_admin_name' => management_auth_info_name(),
        ];

        return $this->revert($business->update($payload, $adminInfo));
    }

    /**
     * 批量更新crm权限
     * @param Request $request
     * @param CrmRolePermissionRelationBusiness $business
     * @return array|JsonResponse|null
     * @throws AppException
     * @throws Throwable
     * @throws \App\Exceptions\Common\AuthException
     * @throws \Illuminate\Validation\ValidationException
     */
    public function batchUpdate(Request $request, CrmRolePermissionRelationBusiness $business): JsonResponse|array|null
    {
        $payload = $this->batchValidateUpdate($request);

        $adminInfo = [
            'edit_admin_id'   => management_auth_info_id(),
            'edit_admin_name' => management_auth_info_name(),
        ];

        return $this->revert($business->batchUpdate($payload, $adminInfo));
    }

    /**
     * 批量新增crm权限
     * @param Request $request
     * @param CrmRolePermissionRelationBusiness $business
     * @return array|JsonResponse|null
     * @throws AppException
     * @throws Throwable
     * @throws \App\Exceptions\Common\AuthException
     * @throws \Illuminate\Validation\ValidationException
     */
    public function batchAdd(Request $request, CrmRolePermissionRelationBusiness $business): JsonResponse|array|null
    {
        $payload = $this->batchValidateUpdate($request);

        $adminInfo = [
            'edit_admin_id'   => management_auth_info_id(),
            'edit_admin_name' => management_auth_info_name(),
        ];

        return $this->revert($business->batchAdd($payload, $adminInfo));
    }

    /**
     * 批量删除crm权限
     * @param Request $request
     * @param CrmRolePermissionRelationBusiness $business
     * @return array|JsonResponse|null
     * @throws AppException
     * @throws Throwable
     * @throws \App\Exceptions\Common\AuthException
     * @throws \Illuminate\Validation\ValidationException
     */
    public function batchDelete(Request $request, CrmRolePermissionRelationBusiness $business): JsonResponse|array|null
    {
        $payload = $this->batchValidateUpdate($request);

        $adminInfo = [
            'edit_admin_id'   => management_auth_info_id(),
            'edit_admin_name' => management_auth_info_name(),
        ];

        return $this->revert($business->batchDelete($payload, $adminInfo));
    }

    /**
     * crm app分配权限
     * @param Request $request
     * @param CrmRolePermissionRelationBusiness $business
     * @return array|JsonResponse|null
     * @throws AppException
     * @throws Throwable
     */
    public function appUpdate(Request $request, CrmRolePermissionRelationBusiness $business): JsonResponse|array|null
    {
        $payload = $request->all();

        $adminInfo = [
            'edit_admin_id'   => management_auth_info_id(),
            'edit_admin_name' => management_auth_info_name(),
        ];

        return $this->revert(
            $business->update($payload, $adminInfo, SysTerminal::SYS_TERMINAL_APP)
        );
    }

    /**
     * 批量删除crm app权限
     * @param Request $request
     * @param CrmRolePermissionRelationBusiness $business
     * @return array|JsonResponse|null
     * @throws AppException
     * @throws Throwable
     * @throws \App\Exceptions\Common\AuthException
     * @throws \Illuminate\Validation\ValidationException
     */
    public function appBatchDelete(Request $request, CrmRolePermissionRelationBusiness $business): JsonResponse|array|null
    {
        $payload = $this->batchValidateUpdate($request);

        $adminInfo = [
            'edit_admin_id'   => management_auth_info_id(),
            'edit_admin_name' => management_auth_info_name(),
        ];

        return $this->revert($business->batchDelete($payload, $adminInfo, SysTerminal::SYS_TERMINAL_APP));
    }

    /**
     * 批量更新crm权限
     * @param Request $request
     * @param CrmRolePermissionRelationBusiness $business
     * @return array|JsonResponse|null
     * @throws AppException
     * @throws Throwable
     * @throws \App\Exceptions\Common\AuthException
     * @throws \Illuminate\Validation\ValidationException
     */
    public function appBatchUpdate(Request $request, CrmRolePermissionRelationBusiness $business): JsonResponse|array|null
    {
        $payload = $this->batchValidateUpdate($request);

        $adminInfo = [
            'edit_admin_id'   => management_auth_info_id(),
            'edit_admin_name' => management_auth_info_name(),
        ];

        return $this->revert($business->batchUpdate($payload, $adminInfo, SysTerminal::SYS_TERMINAL_APP));
    }

    /**
     * 获批量修改角色权限的参数
     * @param Request $request
     * @return array
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function batchValidateUpdate(Request $request)
    {
        return $this->validate($request, [
            'role_nos'                        => ['required', 'array'],
            'role_nos.*'                      => ['required', 'string'],
            'permissions'                     => ['nullable', 'array'],
            'permissions.*.id'                => ['required', 'integer'],
            'permissions.*.encryption_option' => ['nullable', 'string', Rule::in(EncryptionOption::all())],
        ], [], [
            'role_nos.*'       => '角色编号',
            'permissions.*.id' => '权限id',
        ]);
    }

    /**
     * 刷新权限
     * @param Request                           $request
     * @param CrmRolePermissionRelationBusiness $business
     * @return array|JsonResponse|null
     * @throws AppException
     * @throws Throwable
     */
    public function refresh(Request $request, CrmRolePermissionRelationBusiness $business): JsonResponse|array|null
    {
        $business->refresh($request->all());

        return $this->revert(null);
    }
}
