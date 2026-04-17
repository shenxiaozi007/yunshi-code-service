<?php

namespace App\Kernel\Traits;

trait CacheKeyTraits
{
    /**
     * 生成缓存key
     * @param string $path
     * @param string|null $key
     * @param array $params
     * @return string
     */
    public static function generateCacheKey(string $path, string $key = null, array $params = [])
    {
        // 定义格式：program:path:key
//        return trim(
//            sprintf(config('cache.prefix') . ':' . $path . ':' . $key, $params)
//        );

        $cacheKey = config('cache.prefix') . ':' . $path;

        if (filled($key))
        {
            $cacheKey = $cacheKey . ':' . $key;
        }

        if (str_contains($cacheKey, '%'))
        {
            $cacheKey = sprintf($cacheKey, ...$params);
        }

        return trim($cacheKey);
    }
}
