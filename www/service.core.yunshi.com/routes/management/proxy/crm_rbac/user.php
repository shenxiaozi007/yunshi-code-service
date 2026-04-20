<?php

use App\Modules\Basics\Constant\Rbac\WebRoute;
use Laravel\Lumen\Routing\Router;

/** @var Router $router */

/**
 * crm员工管理
 */
$router->group(
    [
        'prefix'     => 'crm-rbac/user',
        'namespace'  => 'CrmRbac',
        'middleware' => 'auth:jwt-management'
    ],
    function ($router)
    {
        // 添加
        $router->post('store',
            [
                'as'   => WebRoute::MANAGEMENT_CRM_USER_STORE,
                'uses' => 'CrmUserController@store',
            ]
        );

        // 更新
        $router->post('update',
            [
                'as'   => WebRoute::MANAGEMENT_CRM_USER_UPDATE,
                'uses' => 'CrmUserController@update',
            ]
        );

        // 详情
        $router->get('detail',
            [
                'as'   => WebRoute::MANAGEMENT_CRM_USER_DETAIL,
                'uses' => 'CrmUserController@detail',
            ]
        );

        // 分页列表
        $router->get('get-page-list',
            [
                'as'   => WebRoute::MANAGEMENT_CRM_USER_GET_PAGE_LIST,
                'uses' => 'CrmUserController@getPageList',
            ]
        );

        // 下拉列表
        $router->get('select-list',
            [
                'as'   => WebRoute::AUTH_NEEDLESS,
                'uses' => 'CrmUserController@selectList',
            ]
        );

        // 修改密码
        $router->post('update-password',
            [
                'as'   => WebRoute::MANAGEMENT_CRM_USER_UPDATE_PASSWORD,
                'uses' => 'CrmUserController@updatePassword',
            ]
        );

        // 修改角色
        $router->post('update-role',
            [
                'as'   => WebRoute::MANAGEMENT_CRM_USER_UPDATE_ROLE,
                'uses' => 'CrmUserController@updateRole',
            ]
        );

        // 离职
        $router->post('dimission',
            [
                'as'   => WebRoute::MANAGEMENT_CRM_USER_DIMISSION,
                'uses' => 'CrmUserController@dimission',
            ]
        );

        // 生成模拟登录鉴权链接
        $router->post('generate-auth-link',
            [
                'as'   => WebRoute::MANAGEMENT_CRM_USER_GENERATE_AUTH_LINK,
                'uses' => 'CrmUserController@generateAuthLink',
            ]
        );

        // 修改员工状态
        $router->post('modify-status',
            [
                'as'   => WebRoute::MANAGEMENT_CRM_USER_MODIFY_STATUS,
                'uses' => 'CrmUserController@modifyStatus',
            ]
        );

        // 强制员工退出登录
        $router->get('force-logout',
            [
                'as'   => WebRoute::MANAGEMENT_CRM_USER_FORCE_LOGOUT,
                'uses' => 'CrmUserController@forceLogout',
            ]
        );

        // 核心crm员工登录日志列表
        $router->get('login-log/page-list',
            [
                'as'   => WebRoute::MANAGEMENT_CRM_USER_LOGIN_LOG_PAGE_LIST,
                'uses' => 'CrmUserController@getLoginLogsByUserNo',
            ],
        );
    }
);


