<?php

namespace App\Kernel\Base;

/**
 * 业务基类
 *
 */
class BaseBusiness
{
    /**
     * 根据映射获取数据
     * @param array $sourceData
     * @param array $map
     * @return array
     */
    public function getDataByMap(array $sourceData, array $map): array
    {
        $data = [];

        if(filled($sourceData) && filled($map))
        {
            foreach ($map as $targetKey => $sourceKey)
            {
                $value = is_callable($sourceKey) ?
                    $sourceKey($sourceData) :
                    array_get($sourceData, $sourceKey);

                if(
                    filled($value)
                    ||
                    (is_string($value) && trim($value) === '')
                )
                {
                    $data[$targetKey] = $value;
                }
            }
        }

        return $data;
    }
}
