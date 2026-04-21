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
 * 【完整依赖关系清单】
 * ============================================================================
 * 
 * 1. 路由配置
 * ----------------------------------------------------------------------------
 * 文件: routes/management/proxy/rbac/sys_permission.php
 * 前缀: rbac/sys-permission
 * 命名空间: Rbac
 * 中间件: auth:jwt-management
 * 
 * GET  /rbac/sys-permission/my-permission-list
 *   → myPermissionList()
 *   → 路由名称: MANAGEMENT_SYS_PERMISSION_MY_PERMISSION_LIST
 * 
 * 2. Business类依赖
 * ----------------------------------------------------------------------------
 * 文件: app/Modules/Management/Business/Rbac/CorePermissionBusiness.php
 * 类名: CorePermissionBusiness
 * 使用方法: myPermissionList()
 * 
 * 3. WebRoute常量声明
 * ----------------------------------------------------------------------------
 * 文件: app/Constants/WebRoute.php
 * 常量: MANAGEMENT_SYS_PERMISSION_MY_PERMISSION_LIST
 * 值: 'management.sys_permission.my_permission_list'
 * 
 * 4. 权限配置 (permission.php)
 * ----------------------------------------------------------------------------
 * [待补充 - 需要在permission.php中搜索相关的权限配置]
 * 
 * 5. 权限分组配置 (permission_group.php)
 * ----------------------------------------------------------------------------
 * [待补充 - 需要在permission_group.php中搜索相关的权限分组]
 * 
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
