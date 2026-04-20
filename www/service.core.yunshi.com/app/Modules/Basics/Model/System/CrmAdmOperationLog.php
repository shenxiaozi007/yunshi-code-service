<?php

namespace App\Modules\Basics\Model\System;

use App\Kernel\Traits\ModelTimeTraits;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * CRM用户登录日志
 */
class CrmAdmOperationLog extends Model
{
    use SoftDeletes, ModelTimeTraits;

    /**
     * @var string
     */
    protected $table = 'crm_adm_operation_log';

    /**
     * @var array
     */
    public $hidden = [
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
     * @var string[]
     */
    protected $casts = [
        'request_header' => 'array',
    ];

    /**
     * 账号 查询
     * @param Builder $query
     * @param string $value
     * @return Builder
     */
    public function scopeAccountQuery(Builder $query, string $value)
    {
        return $query->where('account', $value);
    }

    /**
     * add_time
     * @param Builder $query
     * @param $value
     */
    public function scopeSortByAddTimeQuery(Builder $query, $value)
    {
        return $query->orderBy('add_time', $value);
    }
}
