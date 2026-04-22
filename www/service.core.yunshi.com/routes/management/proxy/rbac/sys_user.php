<?php

use App\Modules\Basics\Constant\Rbac\WebRoute;
use Laravel\Lumen\Routing\Router;

/** @var Router $router */

/**
 * 后台相关用户
 */
$router->group(['prefix' => 'rbac/sys-user', 'namespace' => 'Rbac'], function ($router)
{
    /**
     * 不需要登录验证
     */
    // 登录
    $router->post('login', [
        'as'   => WebRoute::MANAGEMENT_LOGIN,
        'uses' => 'SysUserController@login',
    ]);

    // 获取登录用户信息
    $router->post('get-login-info', [
        'as'   => WebRoute::AUTH_NEEDLESS,
        'uses' => 'SysUserController@getLoginInfo',
    ]);

    // 下拉列表
    $router->get('select-list',
        [
            'as'   => WebRoute::AUTH_NEEDLESS,
            'uses' => 'SysUserController@selectList',
        ]
    );

    /**
     * 需要登录验证的接口
     */
    $router->group(['middleware' => 'auth:jwt-management'], function ($router)
    {
        // 修改个人密码
        $router->post('change-personal-password', [
            'as'   => WebRoute::MANAGEMENT_SYS_USER_CHANGE_PERSONAL_PASSWORD,
            'uses' => 'SysUserController@changePersonalPassword',
        ]);

        // 更新头像
        $router->post('change-personal-avatar', [
            'as'   => WebRoute::MANAGEMENT_SYS_USER_CHANGE_PERSONAL_AVATAR,
            'uses' => 'SysUserController@changePersonalAvatar',
        ]);

        // 退出
        $router->get('logout', [
            'as'   => WebRoute::MANAGEMENT_LOGOUT,
            'uses' => 'SysUserController@logout',
        ]);

        // 详情
        $router->get('detail',
            [
                'as'   => WebRoute::MANAGEMENT_SYS_USER_DETAIL,
                'uses' => 'SysUserController@detail',
            ]
        );

        // 当前成员信息
        $router->get('user-info',
            [
                'as'   => WebRoute::MANAGEMENT_SYS_USER_USER_INFO,
                'uses' => 'SysUserController@curUserInfo',
            ]
        );

        // 添加
        $router->post('store',
            [
                'as'   => WebRoute::MANAGEMENT_SYS_USER_STORE,
                'uses' => 'SysUserController@store',
            ]
        );

        // 更新
        $router->post('update',
            [
                'as'   => WebRoute::MANAGEMENT_SYS_USER_UPDATE,
                'uses' => 'SysUserController@update',
            ]
        );

        // 列表
        $router->get('get-page-list',
            [
                'as'   => WebRoute::MANAGEMENT_SYS_USER_GET_PAGE_LIST,
                'uses' => 'SysUserController@getPageList',
            ]
        );

        // 列表，不分页
        $router->get('get-list',
            [
                'as'   => WebRoute::AUTH_NEEDLESS,
                'uses' => 'SysUserController@getList',
            ]
        );

        // 更新状态
        $router->post('update-account-status',
            [
                'as'   => WebRoute::MANAGEMENT_SYS_USER_UPDATE_ACCOUNT_STATUS,
                'uses' => 'SysUserController@updateAccountStatus',
            ]
        );

        // 修改密码
        $router->post('update-password',
            [
                'as'   => WebRoute::MANAGEMENT_SYS_USER_UPDATE_PASSWORD,
                'uses' => 'SysUserController@updatePassword',
            ]
        );

        // 绑定crm
        $router->post('bind-crm-user',
            [
                'as'   => WebRoute::MANAGEMENT_SYS_USER_BIND_USER,
                'uses' => 'SysUserController@bindCrmUser',
            ]
        );

        // 解绑crm
        $router->post('unbind-crm-user',
            [
                'as'   => WebRoute::MANAGEMENT_SYS_USER_UNBIND_USER,
                'uses' => 'SysUserController@unbindCrmUser',
            ]
        );

        // 获取密码登录状态
        $router->get('password-expire-status',
            [
                'as'   => WebRoute::MANAGEMENT_SYS_USER_PASSWORD_EXPIRE_STATUS,
                'uses' => 'SysUserController@getPasswordExpireStatus',
            ]
        );

        // 强制成员退出
        $router->get('force-logout-by-account',
            [
                'as'   => WebRoute::MANAGEMENT_SYS_USER_FORCE_LOGOUT_BY_ACCOUNT,
                'uses' => 'SysUserController@forceLogoutByAccount',
            ]
        );
    });
});
