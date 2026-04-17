<?php

use App\Exceptions\Common\AuthException;

if (!function_exists('get_session_id'))
{
    /**
     * 获取登录sessionId
     *
     * @param string $account
     * @return string
     */
    function get_session_id(string $account)
    {
        return $account .'_' .  date('YmdHis') . '_' . generate_code(5);
    }
}

if (!function_exists('management_auth'))
{
    /**
     * 管理员
     * @return \App\Modules\Management\Business\Guard\ManagementJwtGuard
     */
    function management_auth()
    {
        return app('auth')->guard('jwt-management');
    }
}

if (!function_exists('management_auth_info'))
{
    /**
     * 管理员登录登录信息
     * @param string $column
     * @param string $default
     * @return array|mixed
     * @throws AuthException
     */
    function management_auth_info(string $column = '', string $default = '')
    {
        $guard = management_auth()->user();

        $user = $guard ? $guard->getMapAttributes() : [];

        if (filled($column))
        {
            return array_get($user, $column, $default);
        }

        return $user;
    }
}

if (!function_exists('management_auth_info_account_no'))
{
    /**
     * 管理员登录的用户编号
     * @param string $default
     * @return string
     * @throws AuthException
     */
    function management_auth_info_account_no(string $default = ''): string
    {
        return management_auth_info('account_no', $default);
    }
}

if (!function_exists('management_auth_info_id'))
{
    /**
     * 管理员登录登录信息
     * @param int $default
     * @return int
     * @throws AuthException
     */
    function management_auth_info_id(int $default = 0): int
    {
        return management_auth_info('id', $default);
    }
}

if (!function_exists('management_auth_info_name'))
{
    /**
     * 管理员登录登录信息
     * @param string $default
     * @return string
     * @throws AuthException
     */
    function management_auth_info_name(string $default = ''): string
    {
        return management_auth_info('real_name', $default);
    }
}
