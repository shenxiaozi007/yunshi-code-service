<?php

namespace App\Modules\Basics\Model\CrmPermission;

use App\Kernel\Traits\ModelTimeTraits;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 角色权限关联关系模型
 * @property integer id
 * @property integer role_id
 * @property integer permission_id
 * @property string encryption_option
 */
class CrmAdmRoleBindRelation extends Model
{
    use SoftDeletes, ModelTimeTraits;

    /**
     * 表名
     * @var string
     */
    protected $table = 'crm_adm_role_bind_relation';

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
     * 角色ID查询
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeRoleIdQuery(Builder $query, $value)
    {
        return $query->where('role_id', $value);
    }

    /**
     * 角色ID查询
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopePermissionIdQuery(Builder $query, $value)
    {
        return $query->where('permission_id', $value);
    }

    /**
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeInPermissionIdQuery(Builder $query, $value)
    {
        return $query->whereIn('permission_id', $value);
    }

    /**
     * 关联权限
     *
     * @return BelongsTo
     * @author 秦昊
     * Date: 2021/8/25 11:12
     */
    public function sysPermission()
    {
        return $this->belongsTo(CrmAdmPermission::class, 'permission_id', 'id');
    }

    /**
     * 权限使用终端筛选
     * @param Builder $query
     * @param  $value
     * @return Builder
     */
    public function scopePermissionSysTerminalQuery(Builder $query, $value)
    {
        return $query->whereHas('sysPermission', function ($query) use ($value)
        {
            $query->sysTerminalQuery($value);
        });
    }
}
