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
 *
 * ============================================================================
 * 路由配置 (routes/management/proxy/crm_rbac/role_permission_relation.php)
 * ============================================================================
 * 路由前缀: crm-rbac/role-permission-relation
 * 命名空间: CrmRbac
 * 中间件: auth:jwt-management
 *
 * 【Web端权限路由】
 * ----------------------------------------------------------------------------
 * POST /crm-rbac/role-permission-relation/update
 *   - 方法: update(Request $request, CrmRolePermissionRelationBusiness $business)
 *   - 路由名称: MANAGEMENT_CRM_RBAC_ROLE_PERMISSION_RELATION_UPDATE
 *   - 说明: 分配权限
 *
 * POST /crm-rbac/role-permission-relation/batch-update
 *   - 方法: batchUpdate(Request $request, CrmRolePermissionRelationBusiness $business)
 *   - 路由名称: MANAGEMENT_CRM_RBAC_ROLE_PERMISSION_RELATION_BATCH_UPDATE
 *   - 说明: 批量更新CRM权限
 *   - 验证规则:
 *     - role_nos: required, array
 *     - role_nos.*: required, string
 *     - permissions: nullable, array
 *     - permissions.*.id: required, integer
 *     - permissions.*.encryption_option: nullable, string, in(EncryptionOption::all())
 *
 * POST /crm-rbac/role-permission-relation/batch-add
 *   - 方法: batchAdd(Request $request, CrmRolePermissionRelationBusiness $business)
 *   - 路由名称: MANAGEMENT_CRM_RBAC_ROLE_PERMISSION_RELATION_BATCH_ADD
 *   - 说明: 批量新增CRM权限
 *   - 验证规则: 同batchUpdate
 *
 * POST /crm-rbac/role-permission-relation/batch-delete
 *   - 方法: batchDelete(Request $request, CrmRolePermissionRelationBusiness $business)
 *   - 路由名称: MANAGEMENT_CRM_RBAC_ROLE_PERMISSION_RELATION_BATCH_DELETE
 *   - 说明: 批量删除CRM权限
 *   - 验证规则: 同batchUpdate
 *
 * 【APP端权限路由】
 * ----------------------------------------------------------------------------
 * POST /crm-rbac/role-permission-relation/app-update
 *   - 方法: appUpdate(Request $request, CrmRolePermissionRelationBusiness $business)
 *   - 路由名称: MANAGEMENT_CRM_APP_RBAC_ROLE_PERMISSION_RELATION_UPDATE
 *   - 说明: CRM APP端分配权限
 *
 * POST /crm-rbac/role-permission-relation/app-batch-update
 *   - 方法: appBatchUpdate(Request $request, CrmRolePermissionRelationBusiness $business)
 *   - 路由名称: MANAGEMENT_CRM_APP_RBAC_ROLE_PERMISSION_RELATION_BATCH_UPDATE
 *   - 说明: APP端批量更新CRM权限
 *   - 验证规则: 同batchUpdate
 *
 * POST /crm-rbac/role-permission-relation/app-batch-add
 *   - 方法: batchAdd(Request $request, CrmRolePermissionRelationBusiness $business) [复用batchAdd方法]
 *   - 路由名称: MANAGEMENT_CRM_APP_RBAC_ROLE_PERMISSION_RELATION_BATCH_ADD
 *   - 说明: APP端批量新增CRM权限
 *   - 验证规则: 同batchUpdate
 *
 * POST /crm-rbac/role-permission-relation/app-batch-delete
 *   - 方法: appBatchDelete(Request $request, CrmRolePermissionRelationBusiness $business)
 *   - 路由名称: MANAGEMENT_CRM_APP_RBAC_ROLE_PERMISSION_RELATION_BATCH_DELETE
 *   - 说明: APP端批量删除CRM权限
 *   - 验证规则: 同batchUpdate
 *
 * 【其他路由】
 * ----------------------------------------------------------------------------
 * POST /crm-rbac/role-permission-relation/refresh
 *   - 方法: refresh(Request $request, CrmRolePermissionRelationBusiness $business)
 *   - 路由名称: MANAGEMENT_CRM_RBAC_ROLE_PERMISSION_RELATION_REFRESH
 *   - 说明: 刷新权限
 * ============================================================================
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
    // public function refresh(Request $request, CrmRolePermissionRelationBusiness $business): JsonResponse|array|null
    // {
    //     $business->refresh($request->all());

    //     return $this->revert(null);
    // }
}
