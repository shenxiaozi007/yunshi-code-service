<?php

use App\Modules\Basics\Constant\Rbac\WebRoute;
use Laravel\Lumen\Routing\Router;

/** @var Router $router */

/**
 * 权限分组
 */
$router->group(
    [
        'prefix'     => 'crm-rbac/permission-group',
        'namespace'  => 'CrmRbac',
        'middleware' => 'auth:jwt-management',
    ],
    function ($router)
    {
        // 获取角色权限
        $router->get('detail',
            [
                'as'   => WebRoute::AUTH_NEEDLESS,
                'uses' => 'CrmPermissionGroupController@detail',
            ]
        );

        // 获取权限列表
        $router->get('permissions',
            [
                'as'   => WebRoute::MANAGEMENT_CRM_RBAC_PERMISSION_GROUP_DETAIL,
                'uses' => 'CrmPermissionGroupController@permissions',
            ]
        );

        // 获取角色权限
        $router->get('app-detail',
            [
                'as'   => WebRoute::MANAGEMENT_CRM_APP_RBAC_PERMISSION_GROUP_DETAIL,
                'uses' => 'CrmPermissionGroupController@detailForApp',
            ]
        );

        // 获取app权限列表
        $router->get('app-permissions',
            [
                'as'   => WebRoute::MANAGEMENT_CRM_RBAC_PERMISSION_GROUP_DETAIL,
                'uses' => 'CrmPermissionGroupController@appPermissions',
            ]
        );
    }
);


