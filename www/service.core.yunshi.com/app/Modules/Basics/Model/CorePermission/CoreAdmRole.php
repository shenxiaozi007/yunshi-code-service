<?php

namespace App\Modules\Basics\Model\CorePermission;

use App\Kernel\Traits\ModelTimeTraits;
use App\Modules\Basics\Model\Factory\SortByTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 角色模型
 * @property integer id
 */
class CoreAdmRole extends Model
{
    use SoftDeletes, ModelTimeTraits, SortByTrait;

    /**
     * 表名
     * @var string
     */
    protected $table = 'ycore_adm_role';

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
     * 关联权限
     * @return BelongsToMany
     */
    public function sysPermissions()
    {
        return $this->belongsToMany(CoreAdmPermission::class, 'core_adm_role_bind_relation', 'role_id', 'permission_id');
    }



}
