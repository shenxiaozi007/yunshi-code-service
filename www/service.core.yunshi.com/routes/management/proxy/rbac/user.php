<?php

use App\Modules\Basics\Constant\Rbac\WebRoute;
use Laravel\Lumen\Routing\Router;

/** @var Router $router */

/**
 * 后台相关用户
 */
$router->group(['prefix' => 'rbac/user', 'namespace' => 'Rbac'], function ($router)
{
    // 登录
    $router->post('login', [
        'as'   => WebRoute::MANAGEMENT_LOGIN,
        'uses' => 'CrmUserController@login',
    ]);

    // 模拟登录
    $router->post('simulate-login', [
        'as'   => WebRoute::MANAGEMENT_SIMULATE_LOGIN,
        'uses' => 'CrmUserController@simulateLogin',
    ]);

    /**
     * 需要登录验证的接口
     */
    $router->group(['middleware' => 'auth:jwt-crm-management'], function ($router)
    {
        // 修改个人密码
        $router->post('change-personal-password', [
            'as'   => WebRoute::MANAGEMENT_SYS_USER_CHANGE_PERSONAL_PASSWORD,
            'uses' => 'CrmUserController@changePersonalPassword',
        ]);

        // 更新头像
        $router->post('change-personal-avatar', [
            'as'   => WebRoute::MANAGEMENT_SYS_USER_CHANGE_PERSONAL_AVATAR,
            'uses' => 'CrmUserController@changePersonalAvatar',
        ]);

        // 退出
        $router->get('logout', [
            'as'   => WebRoute::MANAGEMENT_LOGOUT,
            'uses' => 'CrmUserController@logout',
        ]);

        // 当前成员信息
        $router->get('user-info',
            [
                'as'   => WebRoute::MANAGEMENT_SYS_USER_USER_INFO,
                'uses' => 'CrmUserController@curUserInfo',
            ]
        );

        // 更新
        $router->post('update',
            [
                'as'   => WebRoute::MANAGEMENT_SYS_USER_UPDATE,
                'uses' => 'CrmUserController@update',
            ]
        );

        // 下拉列表
        $router->get('select-list',
            [
                'as'   => WebRoute::AUTH_NEEDLESS,
                'uses' => 'CrmUserController@selectList',
            ]
        );

    });
});
