<?php

namespace App\Modules\Basics\Model\CorePermission;

use App\Kernel\Traits\ModelTimeTraits;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 权限组模型
 */
class CoreAdmPermissionGroup extends Model
{
    use SoftDeletes, ModelTimeTraits;

    /**
     * 表名
     * @var string
     */
    protected $table = 'core_adm_permission_group';

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

    /**
     * @var string[]
     */
    protected $with = [
        'permissionGroups',
        'permissions',
    ];

    /**
     * @var string[]
     */
    protected $appends = [
        'expanded',
    ];

    /**
     * 添加一个是否折叠，前端用
     */
    public function getExpandedAttribute()
    {
        return $this->attributes['expanded'] = true;
    }

    /**
     * PID查询
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopePidQuery(Builder $query, $value)
    {
        return $query->where('pid', $value);
    }

    /**
     * @param Builder $query
     * @param array $value
     * @return Builder
     */
    public function scopeNotInAliasNameQuery(Builder $query, array $value)
    {
        return $query->whereNotIn('alias_name', $value);
    }

    /**
     * 别名查询
     * @param Builder $query
     * @param string $value
     * @return Builder
     */
    public function scopeAliasNameQuery(Builder $query, string $value)
    {
        return $query->where('alias_name', $value);
    }

    /**
     * @return HasMany
     * @author 秦昊
     * Date: 2021/8/25 11:09
     */
    public function permissionGroups()
    {
        return $this->hasMany(CoreAdmPermissionGroup::class, 'pid')
            ->orderBy('sort');
    }

    /**
     * @return HasMany
     * @author 秦昊
     * Date: 2021/8/25 11:09
     */
    public function permissions()
    {
        return $this->hasMany(CoreAdmPermission::class, 'group_id');
    }

}
