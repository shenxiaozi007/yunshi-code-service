<?php

use App\Modules\Basics\Constant\Rbac\WebRoute;
use Laravel\Lumen\Routing\Router;

/** @var Router $router */

/**
 * 需要登录校验
 */
$router->group(
    [
        'prefix'    => 'rbac/sys-permission-group',
        'namespace' => 'Rbac',
        'middleware'=> 'auth:jwt-management',
    ],
    function ($router)
    {
        // 角色权限详情
        $router->get('detail',
            [
                'as'   => WebRoute::MANAGEMENT_RBAC_SYS_PERMISSION_GROUP_DETAIL,
                'uses' => 'SysPermissionGroupController@detail',
            ]
        );
    }
);


