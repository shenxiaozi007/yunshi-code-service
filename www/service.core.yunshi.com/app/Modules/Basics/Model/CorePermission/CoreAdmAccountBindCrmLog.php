<?php

namespace App\Modules\Basics\Model\CorePermission;

use App\Kernel\Traits\ModelMainNoTrait;
use App\Kernel\Traits\ModelTimeTraits;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Query\Builder;

/**
 * Class CoreAdmAccountBindCrmLog
 * @package App\Modules\Basics\Model\CorePermission
 */
class CoreAdmAccountBindCrmLog extends Model
{
    use SoftDeletes, ModelTimeTraits, ModelMainNoTrait;

    /**
     * 表名
     * @var string
     */
    protected $table = 'core_adm_account_bind_crm_log';

    /**
     * @var array
     */
    public $hidden = [
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

    protected $fillable = [
        'log_no',
        'core_account_no',
        'core_real_name',
        'crm_user_no',
        'crm_user_real_name',
        'action',
        'action_at',
        'add_admin_id',
        'add_admin_name',
        'add_time',
        'last_update_time',
    ];

    /**
     * 主表的唯一编号
     * @return string
     */
    public function mainNo(): string
    {
        return 'log_no';
    }

    /**
     * 唯一编码查询
     * @param Builder $query
     * @param $value
     */
    public function scopeLogNoQuery(Builder $query, $value)
    {
        $query->where('log_no', to_array($value));
    }
}
