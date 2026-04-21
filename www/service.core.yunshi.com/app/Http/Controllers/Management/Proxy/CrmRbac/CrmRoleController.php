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

/**
 * crm角色控制器
 * Class CrmRoleController
 * @package App\Http\Controllers\Management\Proxy\Rbac
 * 
 * ============================================================================
 * 路由配置 (routes/management/proxy/crm_rbac/role.php)
 * ============================================================================
 * 路由前缀: crm-rbac/role
 * 命名空间: CrmRbac
 * 中间件: auth:jwt-management
 * 
 * 路由列表:
 * POST /crm-rbac/role/store
 *   - 方法: store(Request $request, CrmRoleBusiness $business)
 *   - 路由名称: MANAGEMENT_CRM_RBAC_ROLE_STORE
 *   - 说明: 存储角色（需要name, remark参数）
 * 
 * POST /crm-rbac/role/copy
 *   - 方法: copy(Request $request, CrmRoleBusiness $business)
 *   - 路由名称: MANAGEMENT_CRM_RBAC_ROLE_COPY
 *   - 说明: 复制角色（需要role_no, name, remark参数）
 * 
 * GET  /crm-rbac/role/detail
 *   - 方法: detail(Request $request, CrmRoleBusiness $business)
 *   - 路由名称: MANAGEMENT_CRM_RBAC_ROLE_DETAIL
 *   - 说明: 获取角色详情（需要role_no参数，必填）
 * 
 * GET  /crm-rbac/role/page-list
 *   - 方法: getPageList(Request $request, CrmRoleBusiness $business)
 *   - 路由名称: MANAGEMENT_CRM_RBAC_ROLE_PAGE_LIST
 *   - 说明: 角色分页列表
 * 
 * GET  /crm-rbac/role/select-list
 *   - 方法: selectList(Request $request, CrmRoleBusiness $business)
 *   - 路由名称: MANAGEMENT_CRM_RBAC_ROLE_SELECT_LIST
 *   - 说明: 角色下拉选择列表
 * 
 * POST /crm-rbac/role/update
 *   - 方法: update(Request $request, CrmRoleBusiness $business)
 *   - 路由名称: MANAGEMENT_CRM_RBAC_ROLE_UPDATE
 *   - 说明: 修改角色信息（需要role_no, name, remark参数）
 * 
 * POST /crm-rbac/role/batch-set-user-role
 *   - 方法: batchSetUserRole(Request $request, CrmRoleBusiness $business)
 *   - 路由名称: MANAGEMENT_CRM_RBAC_ROLE_BATCH_SET_USER_ROLE
 *   - 说明: 批量更新在职员工角色（需要role_no, role_user_no参数）
 * 
 * POST /crm-rbac/role/delete
 *   - 方法: delete(Request $request, CrmRoleBusiness $business)
 *   - 路由名称: MANAGEMENT_CRM_RBAC_ROLE_DELETE
 *   - 说明: 删除角色
 * ============================================================================
 */
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
