<?php

namespace App\Http\Controllers\Management\Proxy\CrmRbac;

use App\Exceptions\Common\AppException;
use App\Kernel\Base\BaseController;
use App\Modules\Basics\Constant\Rbac\SysTerminal;
use App\Modules\Management\Business\CrmRbac\CrmPermissionGroupBusiness;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * 后台管理员权限组控制器
 * Class CrmPermissionGroupController
 * @package App\Http\Controllers\Management\Proxy\CrmRbac
 * 
 * ============================================================================
 * 路由配置 (routes/management/proxy/crm_rbac/permission_group.php)
 * ============================================================================
 * 路由前缀: crm-rbac/permission-group
 * 命名空间: CrmRbac
 * 中间件: auth:jwt-management
 * 
 * 路由列表:
 * GET  /crm-rbac/permission-group/detail
 *   - 方法: detail(Request $request, CrmPermissionGroupBusiness $business)
 *   - 路由名称: AUTH_NEEDLESS
 *   - 说明: 获取角色权限详情（需要role_no参数）
 * 
 * GET  /crm-rbac/permission-group/permissions
 *   - 方法: permissions(CrmPermissionGroupBusiness $business)
 *   - 路由名称: MANAGEMENT_CRM_RBAC_PERMISSION_GROUP_DETAIL
 *   - 说明: 获取CRM权限列表（树形结构）
 * 
 * GET  /crm-rbac/permission-group/app-detail
 *   - 方法: detailForApp(Request $request, CrmPermissionGroupBusiness $business)
 *   - 路由名称: MANAGEMENT_CRM_APP_RBAC_PERMISSION_GROUP_DETAIL
 *   - 说明: APP端获取角色权限详情（需要role_no参数）
 * 
 * GET  /crm-rbac/permission-group/app-permissions
 *   - 方法: appPermissions(CrmPermissionGroupBusiness $business)
 *   - 路由名称: MANAGEMENT_CRM_RBAC_PERMISSION_GROUP_DETAIL
 *   - 说明: 获取CRM APP权限列表（树形结构）
 * ============================================================================
 */
class CrmPermissionGroupController extends BaseController
{
    /**
     * 权限详情，树形结构
     * @param Request $request
     * @param CrmPermissionGroupBusiness $business
     * @return array|JsonResponse|null
     * @throws AppException
     */
    public function detail(Request $request, CrmPermissionGroupBusiness $business)
    {
        if (blank($roleNo = $request->get('role_no')))
        {
            throw new AppException(100003);
        }

        return $this->revert(
            $business->getDetailByRoleNoAndSysTerminal($roleNo)
        );
    }

    /**
     * 获取crm权限列表
     * @param CrmPermissionGroupBusiness $business
     * @return array|JsonResponse|null
     */
    public function permissions(CrmPermissionGroupBusiness $business): JsonResponse|array|null
    {
        return $this->revert(
            $business->getTree()
        );
    }

    /**
     * app权限详情，树形结构
     * @param Request $request
     * @param CrmPermissionGroupBusiness $business
     * @return array|JsonResponse|null
     * @throws AppException
     */
    public function detailForApp(Request $request, CrmPermissionGroupBusiness $business)
    {
        if (blank($roleNo = $request->get('role_no')))
        {
            throw new AppException(100003);
        }

        return $this->revert(
            $business->getDetailByRoleNoAndSysTerminal($roleNo, SysTerminal::SYS_TERMINAL_APP)
        );
    }

    /**
     * 获取crm APP权限列表
     * @param CrmPermissionGroupBusiness $business
     * @return array|JsonResponse|null
     */
    public function appPermissions(CrmPermissionGroupBusiness $business): JsonResponse|array|null
    {
        return $this->revert(
            $business->getTree(SysTerminal::SYS_TERMINAL_APP)
        );
    }
}
