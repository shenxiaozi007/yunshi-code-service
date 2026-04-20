<?php

namespace App\Modules\Basics\Model\CrmPermission;

use App\Kernel\Traits\ModelTimeTraits;
use App\Modules\Basics\Model\CrmPermission\CrmAdmRole;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 销售职位模型
 * Class CrmUserPosition
 * @property int position_grade
 * @package App\Modules\Basics\Model\Company
 */
class CrmUserPosition extends Model
{
    use SoftDeletes, ModelTimeTraits;

    /**
     * 表名
     * @var string
     */
    protected $table = 'crm_user_position';

    /**
     * @var array
     */
    public $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * 职位名模糊查询
     * @param Builder $query
     * @param $value
     */
    public function scopeNameLikeQuery(Builder $query, $value): void
    {
        $query->where('name', 'LIKE', "%$value%");
    }

    /**
     * 关联角色
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function role(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(CrmAdmRole::class, 'relevance_position_id');
    }

    /**
     * add_time 排序
     * @param Builder $query
     * @param $value
     */
    public function scopeSortByAddTimeQuery(Builder $query, $value): void
    {
        $query->orderBy('add_time', $value);
    }
}
