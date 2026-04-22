<?php

namespace App\Modules\Basics\Model\CrmPermission;

use App\Kernel\Traits\ModelTimeTraits;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * 权限模型
 * Class CrmPermission
 * @package App\Modules\Basics\Model\SysPermission
 */
class CrmAdmPermission extends Model
{
    use SoftDeletes, ModelTimeTraits;

    /**
     * 表名
     * @var string
     */
    protected $table = 'ycrm_adm_permission';

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
    protected $casts = [
        'client_route_name'     => 'array',
        'proxy_route_name'      => 'array',
        'encryption_options'    => 'array',
    ];

    /**
     * 组别名IN查询
     * @param Builder $query
     * @param array $value
     * @return Builder
     */
    public function scopeInGroupAliasQuery(Builder $query, array $value)
    {
        return $query->whereIn('group_alias', $value);
    }

    /**
     * 组别名IN查询
     * @param $query
     * @param array $value
     * @return Builder
     */
    public function scopeNotInGroupAliasQuery(Builder $query, array $value)
    {
        return $query->whereNotIn('group_alias', $value);
    }

    /**
     * @param $query
     * @param array $value
     * @return Builder
     */
    public function scopeNotInAliasNamesQuery(Builder $query, array $value)
    {
        return $query->whereNotIn('alias_name', $value);
    }

    /**
     * 别名查询
     * @param $query
     * @param $value
     * @return Builder
     */
    public function scopeAliasNameQuery(Builder $query, string $value)
    {
        return $query->where('alias_name', $value);
    }

    /**
     * ID数组查询
     * @param $query
     * @param $value
     * @return Builder
     */
    public function scopeInIdsQuery(Builder $query, array $value)
    {
        return $query->whereIn('id', $value);
    }

    /**
     * @param $query
     * @param string $path
     * @return
     */
    public function scopeProxyRouteNameQuery(Builder $query, string $path)
    {
        return $query->whereJsonContains('proxy_route_name', $path);
    }

    /**
     * @param $query
     * @param string $value
     * @return Builder
     */
    public function scopeIsInitQuery(Builder $query, string $value)
    {
        return $query->where('is_init', $value);
    }

    /**
     * 权限使用终端筛选
     * @param Builder $query
     * @param string $value
     * @return Builder
     */
    public function scopeSysTerminalQuery(Builder $query, string $value)
    {
        return $query->where('sys_terminal', $value);
    }
}
