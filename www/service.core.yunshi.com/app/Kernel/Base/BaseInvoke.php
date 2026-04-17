<?php

namespace App\Kernel\Base;

/**
 * 跨模块/业务通信基类
 *
 */
class BaseInvoke
{
    /**
     * @param $data
     * @return array
     */
    protected function response($data) : array
    {
        if (! $data) $data = [];

        if (is_object($data) && method_exists($data, 'toArray')) $data = $data->toArray();

        return $data;
    }
}
