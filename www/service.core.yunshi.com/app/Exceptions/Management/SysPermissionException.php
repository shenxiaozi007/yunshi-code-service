<?php

namespace App\Exceptions\Management;

use App\Exceptions\BaseException;

/**
 * 角色权限异常
 */
class SysPermissionException extends BaseException
{
    /**
     * @var array
     */
    protected static array $codeMaps = [
        100001 => [
            'message' => '账号已失效，无法操作',
        ],
        100002 => [
            'message' => '密码错误',
        ],
    ];

}
