<?php

namespace App\Modules\Basics\Model\System;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Jenssegers\Mongodb\Eloquent\Model;

class CoreOperationLog extends Model
{
    use SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'core_operation_Log';

    /**
     * @var string
     */
    protected $connection = 'im_mongodb';

    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @var string[]
     */
    protected $hidden = [
        'last_update_time',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * @var string[]
     */
    protected $appends = [];

    /**
     * @var string[]
     */
    protected $casts = [
        'header'        => 'array',
        'content'       => 'array',
        'account_id'    => 'integer',
    ];

    /**
     * Set the value of the "updated at" attribute.
     *
     * @param  mixed  $value
     */
    public function setUpdatedAt($value)
    {
        parent::setUpdatedAt($value);

        $this->last_update_time = Carbon::now()->getTimestamp();

        return $this;
    }

    /**
     * Set the value of the "updated at" attribute.
     *
     * @param  mixed  $value
     * @return $this
     */
    public function setCreatedAt($value)
    {
        parent::setCreatedAt($value);

        $this->add_time = $this->add_time ?: Carbon::now()->getTimestamp();

        return $this;
    }

    /**
     * ID排序
     *
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeSortByAddTimeQuery(Builder $query, $value): Builder
    {
        return $query->orderBy('add_time', $value);
    }

    /**
     * account_id 查询
     *
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeAccountIdQuery(Builder $query, $value): Builder
    {
        return $query->whereIn('account_id', to_int_array(to_array($value)));
    }

    /**
     * 批量查询
     *
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeAccountIdsQuery(Builder $query, $value): Builder
    {
        return $query->whereIn('account_id', to_int_array(to_array($value)));
    }

    /**
     * account_name 模糊查询
     *
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeAccountNameLikeQuery(Builder $query, $value): Builder
    {
        return $query->where('account_name', 'LIKE', "%$value%");
    }

    /**
     * add_time 开始时间查询
     *
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeAddTimeStartQuery(Builder $query, $value): Builder
    {
        return $query->where('add_time', '>=', $value);
    }

    /**
     * add_time 结束时间查询
     *
     * @param Builder $query
     * @param $value
     * @return Builder
     */
    public function scopeAddTimeEndQuery(Builder $query, $value): Builder
    {
        return $query->where('add_time', '<=', $value);
    }

    /**
     * 不在这些账号ID里的查询
     * @param Builder $query
     * @param $value
     * @author leo 2022/1/10
     */
    public function scopeNotInAccountIdsQuery(Builder $query, $value): void
    {
        $query->whereNotIn('account_id', to_array($value));
    }

    /**
     * 不在这些后端路由里面的查询
     * @param Builder $query
     * @param $value
     * @author leo 2022/1/14
     */
    public function scopeNotInApiRouteNameQuery(Builder $query, $value): void
    {
        $query->whereNotIn('api_route_name', to_array($value));
    }
}
