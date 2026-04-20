<?php

namespace App\Modules\Basics\Model\CrmPermission;

use App\Kernel\Traits\ModelTimeTraits;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * crm用户验证密码模型
 * Class CrmUserAuth
 * @property string password
 * @property string salt
 * @package App\Modules\Basics\Model\CrmPermission
 */
class CrmUserAuth extends Model
{
    use SoftDeletes, ModelTimeTraits;

    /**
     * 表名
     * @var string
     */
    protected $table = 'crm_user_auth';

    /**
     * @var array
     */
    public $hidden = [
        'password',
        'salt',
        'add_time',
        'last_update_time',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * 校验密码是否正确
     * @param string $rawPassword
     * @return bool
     */
    public function verifyPassword(string $rawPassword):bool
    {
        return $this->password == hash_password_with_salt($rawPassword, $this->salt);
    }

}
