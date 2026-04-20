<?php

namespace App\Modules\Basics\Model\Sales;

use App\Kernel\Traits\ModelMainNoTrait;
use App\Kernel\Traits\ModelTimeTraits;
use App\Modules\Basics\Model\CfyfService\Sales\CfyfUser;
use App\Modules\Basics\Model\CrmPermission\CrmUser;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property CrmUser crmUser
 * @property CfyfUser cfyfUser
 */
class CoreSales extends Model
{
    use SoftDeletes, ModelTimeTraits, ModelMainNoTrait;

    /**
     * 表名
     * @var string
     */
    protected $table = 'core_sales';

    /**
     * @var bool
     */
    public $timestamps = true;

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
     * @var string[]
     */
    protected $guarded = [];

    /**
     * @return string
     */
    public function getMainNoColumn(): string
    {
        return 'sales_no';
    }

    /**
     * id排序
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeSortByIdQuery(Builder $query, $value)
    {
        return $query->orderBy('id', $value);
    }

    /**
     * 根据 source_user_id (本质上是crm_user的id)查询
     *
     * @param Builder $query
     * @param $value
     * @author 秦昊
     * Date: 2021/9/3 14:15
     */
    public function scopeSourceUserIdQuery(Builder $query, $value): void
    {
        $query->where('source_user_id', $value);
    }

    /**
     * 查詢工號
     * @param Builder $query
     * @param $value
     * @author hxc
     * @date 2023-01-29 19:52
     */
    public function scopeJobSnQuery(Builder $query, $value): void
    {
        $query->where('job_sn', $value);
    }

    /**
     * id 查询
     *
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeIdQuery(Builder $query, $value): Builder
    {
        return $query->whereIn('id', to_array($value));
    }

    /**
     * 工号
     * @param Builder $query
     * @param $value
     * @author leo 2023/1/17
     */
    public function scopeJobSnArrQuery(Builder $query, $value): void
    {
        $query->whereIn('job_sn', to_array($value));
    }

    /**
     * crm用户
     * @return HasOne
     * @author leo 2023/1/17
     */
    public function crmUser(): HasOne
    {
        return $this->hasOne(CrmUser::class, 'sales_no', 'sales_no');
    }
}
