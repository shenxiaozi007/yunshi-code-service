<?php

namespace App\Modules\Basics\Model\CorePermission;

use App\Kernel\Traits\ModelTimeTraits;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 系统用户模型
 * Class Company
 * @property int last_update_time
 * @package App\Modules\Management\Model
 */
class CoreAdmAccountAuth extends Model
{
    use SoftDeletes, ModelTimeTraits;

    /**
     * 表名
     * @var string
     */
    protected $table = 'ycore_adm_account_auth';

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
    public function verifyPassword(string $rawPassword): bool
    {
        return $this->password === hash_password_with_salt($rawPassword, $this->salt);
    }

    /**
     * account id 查询
     * @param Builder $query
     * @param $value
     */
    public function scopeAccountIdQuery(Builder $query, $value)
    {
        $query->where('account_id', $value);
    }

}
