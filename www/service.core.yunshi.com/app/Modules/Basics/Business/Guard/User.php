<?php

namespace App\Modules\Basics\Business\Guard;

use App\Exceptions\Common\AuthException;
use Illuminate\Auth\GenericUser;
use Laravel\Lumen\Auth\Authorizable;

/**
 * 通用用户模型
 *
 */
class User extends GenericUser
{
    use Authorizable;

    /**
     * 允许保存的字段
     *
     * @var array
     */
    public $fillable = [];

    /**
     * 后台登录用户字段映射
     * key是特定字段，value是公共字段
     *
     * @var array
     */
    protected $fieldsMap = [];

    /**
     * User constructor.
     * @param array $attributes
     * @throws AuthException
     */
    public function __construct(array $attributes)
    {
        if (empty($this->fillable))
        {
            throw new AuthException(400001);
        }

        $attributes = array_only($attributes, $this->fillable);

        parent::__construct($attributes);
    }

    /**
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Get the unique identifier for the user.
     * @return mixed
     * @throws AuthException
     */
    public function getAuthIdentifier()
    {
        if (!isset($this->attributes[$this->getAuthIdentifierName()]))
        {
            throw new AuthException(400002);
        }

        return parent::getAuthIdentifier();
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return $this->getAttributes();
    }

    /**
     * 获取映射后的用户信息
     * @return array
     */
    public function getMapAttributes(): array
    {
        return $this->mapAttributes($this->fieldsMap, $this->attributes);
    }

    /**
     * 属性映射
     *
     * @param array $fieldMaps
     * @param array $attributes
     *
     * @return array
     */
    protected function mapAttributes(array $fieldMaps, array $attributes)
    {
        $formattedAttributes = [];

        foreach ($fieldMaps as $specificKey => $commonKey) {
            $formattedAttributes[$specificKey] = $attributes[$commonKey] ?? '';
            unset($attributes[$commonKey]);
        }

        $formattedAttributes += $attributes;

        return $formattedAttributes;
    }

    /**
     * 设置属性
     * @param array $attributes
     * @return $this
     */
    public function setAttributes(array $attributes)
    {
        $attributes = array_only($attributes, $this->fillable);

        $this->attributes = $attributes;

        return $this;
    }

}
