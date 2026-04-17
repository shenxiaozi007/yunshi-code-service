<?php

namespace App\Exceptions\Common;

use App\Exceptions\BaseException;

/**
 * 通用异常信息
 *
 * @notice 错误码为6位数，以数字 1 开头
 */
class AppException extends BaseException
{
    protected static array $codeMaps = [
        100000 => [
            'message' => 'something wrong.',
        ],
        100001 => [
            'message' => 'resource not found.',
        ],
        100002 => [
            'message' => 'bad request.'
        ],
        100003 => [
            'message' => '参数错误.'
        ],
        100004 => [
            'message' => '平台不存在.'
        ],
        100005 => [
            'message' => '渠道不存在.'
        ],
        100006 => [
            'message' => '没有操作权限.',
        ],
        100007 => [
            'message' => 'method not allowed.',
        ],
        100009 => [
            'message' => 'service authorize fail.'
        ],
        100010 => [
            'message' => 'request expired.'
        ],
        100011 => [
            'message' => 'product context method not exist.',
        ],
        101110 => [
            'message' => 'import rate data failed',
        ],
        110000 => [
            'message' => 'api request, client error.',
        ],
        110001 => [
            'message' => 'api request, connection failed.',
        ],
        110002 => [
            'message' => 'api request failed.',
        ],
        110003 => [
            'message' => 'api response data invalid.',
        ],
        110004 => [
            'message' => 'request host is empty',
        ],
        110005 => [
            'message' => 'empty request signature.',
        ],
        110006 => [
            'message' => '数据不存在',
        ],
        110007 => [
            'message' => 'The current app version is invalid',
        ],
        110008 => [
            'message' => 'main_no not found',
        ],
        110013 => [
            'message' => '模型属性获取器缺少必要字段',
        ],
    ];
}
