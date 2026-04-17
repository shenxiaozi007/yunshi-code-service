<?php

namespace App\Exceptions\Common;

use App\Exceptions\BaseException;

/**
 * 认证 异常信息
 *
 * @notice 错误码为6位数，以数字 4 开头
 */
class AuthException extends BaseException
{
    /**
     * @var array
     */
    protected static array $codeMaps = [
        400001 => [
            'message' => 'User fillable cannot be empty!',
        ],
        400002 => [
            'message' => 'Unauthorized',
            'report' => false,
        ],
        400004 => [
            'message' => '账号或密码错误，请确认后重新输入',
        ],
        400005 => [
            'message' => '你无权操作该记录',
        ],
        400006 => [
            'message' => '账号状态异常，不允许登录',
        ],
        400007 => [
            'message' => '旧密码输入不正确，请重新输入',
        ],
        400008 => [
            'message' => '授权token已失效！',
        ],
        400009 => [
            'message' => '超级管理员不允许注销！',
        ],
        400010 => [
            'message' => '找不到对应的管理员信息！',
        ],
        400011 => [
            'message' => '用户密码已过期'
        ],
        400012 => [
            'message' => '账号已被锁定,请一小时后再试！',
        ],
        400013 => [
            'message' => '该员工已经是离职状态，请勿重复操作',
        ],
        400014 => [
            'message' => '该员工无采集权限，不允许登录插件，请联系管理员',
        ],
    ];
}
