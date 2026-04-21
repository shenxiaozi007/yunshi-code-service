<?php

namespace App\Http\Controllers\Management\Proxy\Rbac;

use App\Exceptions\Common\AppException;
use App\Kernel\Base\BaseController;
use App\Modules\Management\Business\Rbac\CorePermissionBusiness;
use Illuminate\Http\JsonResponse;

/**
 * 后台管理员权限控制器
 * Class SysPermissionController
 * @package App\Http\Controllers\Management\Proxy\Rbac
 * 
 * ============================================================================
 * 路由配置 (routes/management/proxy/rbac/sys_permission.php)
 * ============================================================================
 * 路由前缀: rbac/sys-permission
 * 命名空间: Rbac
 * 中间件: auth:jwt-management
 * 
 * 路由列表:
 * GET  /rbac/sys-permission/my-permission-list
 *   - 方法: myPermissionList()
 *   - 路由名称: MANAGEMENT_SYS_PERMISSION_MY_PERMISSION_LIST
 *   - 说明: 我的权限列表
 * ============================================================================
 */
class SysPermissionController extends BaseController
{
    /**
     * 我的权限列表
     * @param CorePermissionBusiness $sysPermissionBusiness
     * @return array|JsonResponse|null
     * @throws AppException
     * @throws \App\Exceptions\Common\AuthException
     */
    public function myPermissionList(CorePermissionBusiness $sysPermissionBusiness)
    {
        return $this->revert($sysPermissionBusiness->myPermissionList(management_auth_info_id()));
    }

}
