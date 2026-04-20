<?php

use App\Modules\Basics\Constant\Rbac\WebRoute;
use Laravel\Lumen\Routing\Router;

/** @var Router $router */

/**
 * 系统角色
 */
$router->group(
    [
        'prefix'    => 'crm-rbac/role',
        'namespace' => 'CrmRbac',
        'middleware'=> 'auth:jwt-management',
    ],
    function ($router)
    {
        // 添加
        $router->post('store',
            [
                'as'   => WebRoute::MANAGEMENT_CRM_RBAC_ROLE_STORE,
                'uses' => 'CrmRoleController@store',
            ]
        );

        // 复制
        $router->post('copy',
            [
                'as'   => WebRoute::MANAGEMENT_CRM_RBAC_ROLE_COPY,
                'uses' => 'CrmRoleController@copy',
            ]
        );

        // 详情
        $router->get('detail',
            [
                'as'   => WebRoute::MANAGEMENT_CRM_RBAC_ROLE_DETAIL,
                'uses' => 'CrmRoleController@detail',
            ]
        );

        // 列表
        $router->get('page-list',
            [
                'as'   => WebRoute::MANAGEMENT_CRM_RBAC_ROLE_PAGE_LIST,
                'uses' => 'CrmRoleController@getPageList',
            ]
        );

        // 下拉选择列表
        $router->get('select-list',
            [
                'as'   => WebRoute::MANAGEMENT_CRM_RBAC_ROLE_SELECT_LIST,
                'uses' => 'CrmRoleController@selectList',
            ]
        );

        // 更新
        $router->post('update',
            [
                'as'   => WebRoute::MANAGEMENT_CRM_RBAC_ROLE_UPDATE,
                'uses' => 'CrmRoleController@update',
            ]
        );

        // 批量设置员工角色
        $router->post('batch-set-user-role',
            [
                'as'   => WebRoute::MANAGEMENT_CRM_RBAC_ROLE_BATCH_SET_USER_ROLE,
                'uses' => 'CrmRoleController@batchSetUserRole',
            ]
        );

        // 删除
        $router->post('delete',
            [
                'as'   => WebRoute::MANAGEMENT_CRM_RBAC_ROLE_DELETE,
                'uses' => 'CrmRoleController@delete',
            ]
        );
    }
);


