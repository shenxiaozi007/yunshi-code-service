<?php

use App\Modules\Basics\Constant\Rbac\WebRoute;
use Laravel\Lumen\Routing\Router;

/** @var Router $router */

/**
 * 需要登录校验
 */
$router->group(
    [
        'prefix'    => 'rbac/sys-permission',
        'namespace' => 'Rbac',
        'middleware'=> 'auth:jwt-management',
    ],
    function ($router)
    {
        // 角色权限详情
        $router->get('my-permission-list',
            [
                'as'   => WebRoute::MANAGEMENT_SYS_PERMISSION_MY_PERMISSION_LIST,
                'uses' => 'SysPermissionController@myPermissionList',
            ]
        );
    }
);


