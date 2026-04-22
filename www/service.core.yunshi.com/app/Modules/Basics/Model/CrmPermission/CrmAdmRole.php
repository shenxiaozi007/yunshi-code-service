<?php

namespace App\Modules\Basics\Model\CrmPermission;

use App\Kernel\Traits\ModelMainNoTrait;
use App\Kernel\Traits\ModelTimeTraits;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Collection;

/**
 * 角色模型
 * @property integer id
 * @property integer relevance_position_id
 * @property CrmUserPosition userPosition
 * @property Collection users
 */
class CrmAdmRole extends Model
{
    use SoftDeletes, ModelTimeTraits, ModelMainNoTrait;

    /**
     * 表名
     * @var string
     */
    protected $table = 'ycrm_adm_role';

    /**
     * @var array
     */
    public $hidden = [
        'id',
        'last_update_time',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * @return string
     */
    public function getMainNoColumn(): string
    {
        return 'role_no';
    }

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * ID查询
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeIdQuery(Builder $query, $value)
    {
        return $query->where('id', $value);
    }

    /**
     * 角色名模糊查询
     *
     * @param Builder $query
     * @param $value
     */
    public function scopeNameLikeQuery(Builder $query, $value): void
    {
        $query->where('name', 'LIKE', "%$value%");
    }

    /**
     * role_no 查询.
     * @param Builder $query
     * @param $value
     * @return void
     */
    public function scopeRoleNoQuery(Builder $query, $value): void
    {
        $query->where('role_no', $value);
    }

    /**
     * 关联权限
     * @return BelongsToMany
     */
    public function sysPermissions()
    {
        return $this->belongsToMany(CrmAdmPermission::class, 'crm_adm_role_bind_relation', 'role_id', 'permission_id');
    }

    /**
     * name 查询.
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeNameQuery(Builder $query, $value)
    {
        return $query->where('name', $value);
    }

    /**
     * add_time 排序
     *
     * @param Builder $builder
     * @param $value
     * @return Builder
     */
    public function scopeSortByAddTimeQuery(Builder $builder, $value): Builder
    {
        return $builder->orderBy('add_time', $value);
    }

    /**
     * 用户职位
     * @return BelongsTo
     */
    public function userPosition(): BelongsTo
    {
        return $this->belongsTo(CrmUserPosition::class, 'relevance_position_id');
    }

    /**
     * 关联用户
     * @return HasMany
     */
    public function users(): HasMany
    {
        return $this->hasMany(CrmUser::class, 'adm_role_id');
    }
}
