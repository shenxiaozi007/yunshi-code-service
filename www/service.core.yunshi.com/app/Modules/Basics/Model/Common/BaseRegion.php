<?php

namespace App\Modules\Basics\Model\Common;

use App\Modules\Basics\Constant\Common\RegionType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Kernel\Traits\ModelTimeTraits;

/**
 * 地区
 */
class BaseRegion extends Model
{
    use SoftDeletes, ModelTimeTraits;

    protected $table = 'base_region';

    /**
     * @var array
     */
    protected $hidden = [
        'add_time',
        'last_update_time',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * query by id
     *
     * @param $query
     * @param $value
     * @return mixed
     */
    public function scopeIdQuery($query, $value)
    {
        return $query->whereIn('id', to_array($value));
    }

    /**
     * query by type
     *
     * @param $query
     * @param $value
     * @return mixed
     */
    public function scopeTypeQuery($query, $value)
    {
        return $query->where('type', $value);
    }

    /**
     * @param $query
     * @param $value
     * @return mixed
     */
    public function scopeTypeArrQuery($query, $value)
    {
        return $query->whereIn('type', $value);
    }

    /**
     * query by parent_id
     *
     * @param $query
     * @param $value
     * @return mixed
     */
    public function scopePidQuery($query, $value)
    {
        return $query->where('pid', $value);
    }

    /**
     * 不查询国家类型的数据
     *
     * @param $query
     * @return mixed
     */
    public function scopeWithoutCountryQuery($query)
    {
        return $query->where('type', '<>', RegionType::COUNTRY);
    }

}
