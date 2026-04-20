<?php

use App\Modules\Basics\Constant\Rbac\WebRoute;
use Laravel\Lumen\Routing\Router;

/** @var Router $router */

/**
 * 更新权限
 */
$router->group(
    [
        'prefix'     => 'crm-rbac/role-permission-relation',
        'namespace'  => 'CrmRbac',
        'middleware' => 'auth:jwt-management',
    ],
    function ($router)
    {
        // 更新
        $router->post('update',
            [
                'as'   => WebRoute::MANAGEMENT_CRM_RBAC_ROLE_PERMISSION_RELATION_UPDATE,
                'uses' => 'CrmRolePermissionRelationController@update',
            ]
        );

        // 批量更新
        $router->post('batch-update',
            [
                'as'   => WebRoute::MANAGEMENT_CRM_RBAC_ROLE_PERMISSION_RELATION_BATCH_UPDATE,
                'uses' => 'CrmRolePermissionRelationController@batchUpdate',
            ]
        );

        // 批量新增
        $router->post('batch-add',
            [
                'as'   => WebRoute::MANAGEMENT_CRM_RBAC_ROLE_PERMISSION_RELATION_BATCH_ADD,
                'uses' => 'CrmRolePermissionRelationController@batchAdd',
            ]
        );

        // 批量删除
        $router->post('batch-delete',
            [
                'as'   => WebRoute::MANAGEMENT_CRM_RBAC_ROLE_PERMISSION_RELATION_BATCH_DELETE,
                'uses' => 'CrmRolePermissionRelationController@batchDelete',
            ]
        );

        // 更新
        $router->post('app-update',
            [
                'as'   => WebRoute::MANAGEMENT_CRM_APP_RBAC_ROLE_PERMISSION_RELATION_UPDATE,
                'uses' => 'CrmRolePermissionRelationController@AppUpdate',
            ]
        );


        // APP批量更新
        $router->post('app-batch-update',
            [
                'as'   => WebRoute::MANAGEMENT_CRM_APP_RBAC_ROLE_PERMISSION_RELATION_BATCH_UPDATE,
                'uses' => 'CrmRolePermissionRelationController@appBatchUpdate',
            ]
        );

        // APP批量新增
        $router->post('app-batch-add',
            [
                'as'   => WebRoute::MANAGEMENT_CRM_APP_RBAC_ROLE_PERMISSION_RELATION_BATCH_ADD,
                'uses' => 'CrmRolePermissionRelationController@batchAdd',
            ]
        );

        // APP批量删除
        $router->post('app-batch-delete',
            [
                'as'   => WebRoute::MANAGEMENT_CRM_APP_RBAC_ROLE_PERMISSION_RELATION_BATCH_DELETE,
                'uses' => 'CrmRolePermissionRelationController@appBatchDelete',
            ]
        );

        // 刷新
        $router->post('refresh',
            [
                'as'   => WebRoute::MANAGEMENT_CRM_RBAC_ROLE_PERMISSION_RELATION_REFRESH,
                'uses' => 'CrmRolePermissionRelationController@refresh',
            ]
        );
    }
);


