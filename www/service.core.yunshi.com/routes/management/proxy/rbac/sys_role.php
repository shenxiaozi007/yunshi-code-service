<?php

use App\Modules\Basics\Constant\Rbac\WebRoute;
use Laravel\Lumen\Routing\Router;

/** @var Router $router */

/**
 * 系统角色
 */
$router->group(
    [
        'prefix'    => 'rbac/sys-role',
        'namespace' => 'Rbac',
        'middleware'=> 'auth:jwt-management',
    ],
    function ($router)
    {
        // 添加
        $router->post('store',
            [
                'as'   => WebRoute::MANAGEMENT_RBAC_SYS_ROLE_STORE,
                'uses' => 'SysRoleController@store',
            ]
        );

        // 复制
        $router->post('copy',
            [
                'as'   => WebRoute::MANAGEMENT_RBAC_SYS_ROLE_COPY,
                'uses' => 'SysRoleController@copy',
            ]
        );

        // 详情
        $router->get('detail',
            [
                'as'   => WebRoute::MANAGEMENT_RBAC_SYS_ROLE_DETAIL,
                'uses' => 'SysRoleController@detail',
            ]
        );

        // 列表
        $router->get('page-list',
            [
                'as'   => WebRoute::MANAGEMENT_RBAC_SYS_ROLE_PAGE_LIST,
                'uses' => 'SysRoleController@getPageList',
            ]
        );

        // 下拉选择列表
        $router->get('select-list',
            [
                'as'   => WebRoute::MANAGEMENT_RBAC_SYS_ROLE_SELECT_LIST,
                'uses' => 'SysRoleController@selectList',
            ]
        );

        // 更新
        $router->post('update',
            [
                'as'   => WebRoute::MANAGEMENT_RBAC_SYS_ROLE_UPDATE,
                'uses' => 'SysRoleController@update',
            ]
        );

        // 删除
        $router->get('delete',
            [
                'as'   => WebRoute::MANAGEMENT_RBAC_SYS_ROLE_DELETE,
                'uses' => 'SysRoleController@delete',
            ]
        );
    }
);


