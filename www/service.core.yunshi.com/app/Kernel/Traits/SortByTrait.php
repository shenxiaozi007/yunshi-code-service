<?php

namespace App\Modules\Basics\Model\Factory;

use Illuminate\Database\Eloquent\Builder;

trait SortByTrait
{
    /**
     * sort 排序.
     * @param Builder $builder
     * @param $value
     */
    public function scopeSortBySortQuery(Builder $builder, $value)
    {
        $builder->orderBy('sort', $value);
    }

    /**
     * id 排序.
     * @param Builder $builder
     * @param $value
     */
    public function scopeSortByIdQuery(Builder $builder, $value)
    {
        $builder->orderBy('id', $value);
    }

    /**
     * id 排序.
     * @param Builder $builder
     * @param $value
     */
    public function scopeSortByAddTimeQuery(Builder $builder, $value)
    {
        $builder->orderBy('add_time', $value);
    }
}
