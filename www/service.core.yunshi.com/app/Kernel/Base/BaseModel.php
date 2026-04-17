<?php

namespace App\Kernel\Base;

use App\Exceptions\Common\AppException;
use App\Kernel\Traits\ModelTimeTraits;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class BaseModel
 * @package App\Kernel\Base
 */
class BaseModel extends Model
{
    use SoftDeletes, ModelTimeTraits;

    /**
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    /**
     * 获取数据表名
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * 检查模型属性是否存在
     * @param ...$attributes
     * @throws AppException
     */
    public function checkExistsAttributes(... $attributes): void
    {
        $errorMsg = '';

        foreach ($attributes as $attribute)
        {
            if (! array_key_exists($attribute, $this->attributes))
            {
                $errorMsg .= "{$attribute}属性缺失;";
            }
        }

        if (filled($errorMsg))
        {
            throw new AppException(110013, message: $errorMsg);
        }
    }
}
