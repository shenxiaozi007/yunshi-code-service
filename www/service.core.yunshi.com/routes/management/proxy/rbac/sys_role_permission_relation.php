<?php

use App\Modules\Basics\Constant\Rbac\WebRoute;
use Laravel\Lumen\Routing\Router;

/** @var Router $router */

/**
 * 更新权限
 */
$router->group(
    [
        'prefix'    => 'rbac/sys-role-permission-relation',
        'namespace' => 'Rbac',
        'middleware'=> 'auth:jwt-management',
    ],
    function ($router)
    {
        // 更新
        $router->post('update',
            [
                'as'   => WebRoute::MANAGEMENT_SYS_ROLE_PERMISSION_RELATION_UPDATE,
                'uses' => 'SysRolePermissionRelationController@update',
            ]
        );
    }
);


