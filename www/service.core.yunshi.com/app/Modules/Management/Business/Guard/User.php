<?php

namespace App\Modules\Management\Business\Guard;

/**
 * 通用用户模型
 */
class User extends \App\Modules\Basics\Business\Guard\User
{
    public $fillable = [
        'id',
        'account',
        'account_no',
        'real_name',
        'mobile',
        'email',
        'role_id',
        'open_at',
        'account_status',
        'close_at',
        'passwd_last_change_at',
        'session_id',
        'login_ip',
        'login_at',
    ];

}
