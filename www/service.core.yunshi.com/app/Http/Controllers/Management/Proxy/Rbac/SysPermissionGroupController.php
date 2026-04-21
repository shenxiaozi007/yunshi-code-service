<?php

namespace App\Http\Controllers\Management\Proxy\Rbac;

use App\Exceptions\Common\AppException;
use App\Kernel\Base\BaseController;
use App\Modules\Management\Business\Rbac\CorePermissionGroupBusiness;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * 后台管理员权限组控制器
 * Class SysPermissionGroupController
 * @package App\Http\Controllers\Management\Proxy\Rbac
 * 
 * ============================================================================
 * 路由配置 (routes/management/proxy/rbac/sys_permission_group.php)
 * ============================================================================
 * 路由前缀: rbac/sys-permission-group
 * 命名空间: Rbac
 * 中间件: auth:jwt-management
 * 
 * 路由列表:
 * GET  /rbac/sys-permission-group/detail
 *   - 方法: detail(Request $request, CorePermissionGroupBusiness $sysPermissionGroupBusiness)
 *   - 路由名称: MANAGEMENT_RBAC_SYS_PERMISSION_GROUP_DETAIL
 *   - 说明: 权限详情，树形结构（需要role_id参数）
 * ============================================================================
 */
class SysPermissionGroupController extends BaseController
{
    /**
     * 权限详情，树形结构
     * @param Request $request
     * @param CorePermissionGroupBusiness $sysPermissionGroupBusiness
     * @return array|JsonResponse|null
     * @throws AppException
     */
    public function detail(Request $request, CorePermissionGroupBusiness $sysPermissionGroupBusiness)
    {
        $roleId = $request->role_id;
        if (blank($roleId))
        {
            throw new AppException(100003);
        }

        return $this->revert(
            $sysPermissionGroupBusiness->getDetailByRoleId($roleId)
        );
    }

}
