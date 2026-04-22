<?php

namespace App\Kernel\Traits;

use App\Exceptions\Common\AppException;
use Illuminate\Database\Eloquent\Builder;

trait ModelMainNoTrait
{
    /**
     * 模型唯一编码查询
     * @param Builder $query
     * @param $value
     * @throws AppException
     */
    public function scopeMainNoQuery(Builder $query, $value)
    {
        $uniqueNoColumn = $this->getMainNoColumn();

        if (empty($uniqueNoColumn))
        {
            $uniqueNoColumn = $this->mainNo();

            if (empty($uniqueNoColumn))
            {
                throw new AppException(110008);
            }
        }

        $valueArr = to_array($value);

        if (filled($valueArr))
        {
            if (count($valueArr) === 1)
            {
                $query->where($uniqueNoColumn, array_first($valueArr));
            }
            else
            {
                $query->whereIn($uniqueNoColumn, $valueArr);
            }
        }
    }

    /**
     * 获取唯一编码字段名称
     * @return string
     */
    protected function getMainNoColumn(): string
    {
        return '';
    }

    /**
     * @return string
     */
    public function mainNo(): string
    {
        return $this->getMainNoColumn();
    }
}
