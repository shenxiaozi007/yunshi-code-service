<?php

namespace App\Kernel\Base;

use App\Exceptions\Common\AppException;
use App\Exceptions\Common\RuntimeException;

/**
 * 常量类基类
 *
 */
abstract class BaseConstant
{
    /**
     * @return array
     */
    public static function all()
    {
        return array_keys(static::getNames());
    }

    /**
     * @return array
     */
    public abstract static function getNames(): array;

    /**
     * @param $code
     * @return string
     */
    public static function getName($code)
    {
        if(is_null($code)) return '';

        return array_get(static::getNames(), $code, '');
    }

    /**
     * @param $code
     * @return bool
     */
    public static function has($code)
    {
        return array_key_exists($code, static::getNames());
    }

    /**
     * 获取映射
     *
     * @return array
     */
    public static function getMaps()
    {
        $maps = [];

        foreach (static::getNames() as $key => $value)
        {
            $maps[] = [
                'label' => static::getName($key),
                'value' => $key,
            ];
        }

        return $maps;
    }

    /**
     * 排除某些值后返回剩余的枚举值
     * @param $value
     *          需要排除的值
     * @return array
     */
    public static function without($value) :array
    {
        $value = is_array($value) ? $value : explode(',', $value);

        return array_diff(static::all(), $value);
    }

    /**
     * 通过name获取code
     *
     * @param $name
     * @return array
     */
    public static function getCodeByName($name)
    {
        $map = array_flip(static::getNames());

        if(is_null($name)) return null;
        return array_get($map, $name);
    }


    /**
     * 转换数据
     *
     * @param $name
     * @return string
     * @throws AppException
     * @throws RuntimeException
     */
    public static function flipMap($name): string
    {
        if (empty($name))
        {
            throw new AppException(100003);
        }

        // 枚举名称映射
        $constantNames         = static::getNames();

        // 反转枚举名称映射
        $reverseConstantNames  = array_flip($constantNames);

        // 查看此对应的枚举是否存在
        if (!isset($reverseConstantNames[$name]))
        {
            throw new RuntimeException(100005);
        }

        // 获取枚举值
        return $reverseConstantNames[$name];
    }
}
