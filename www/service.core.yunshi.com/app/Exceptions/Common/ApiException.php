<?php

namespace App\Exceptions\Common;

use App\Exceptions\BaseException;

/**
 * 接口响应异常
 *
 */
class ApiException extends BaseException
{
    /**
     * @var null
     */
    protected array $data;

    /**
     * ApiException constructor.
     * @param array $data
     * @throws RuntimeException
     */
    public function __construct(array $data = [])
    {
        if (! isset($data['message']) || ! isset($data['code']))
        {
            throw new RuntimeException(100001);
        }

        parent::__construct($data['code'], $data, $data['message']);
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return parent::getData();
    }
}
