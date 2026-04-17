<?php

namespace App\Exceptions;

use Exception;
use App\Kernel\Traits\ApiResponseTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * 程序异常信息基类
 */
class BaseException extends Exception
{
    use ApiResponseTrait;

    /**
     * @var int
     */
    protected $code;

    /**
     * @var array
     */
    protected array $data;

    /**
     * @var array
     */
    protected array $map = array();

    /**
     * @var array
     */
    protected static array $codeMaps = [];

    /**
     * BaseException constructor.
     * @param $code
     * @param $data
     * @param $message
     */
    public function __construct($code, array $data = [], $message = '')
    {
        $code    = (int)$code;
        $map     = $this->getCodeMap($code);
        $message = $message ?: array_get($map, 'message', '');

        $this->code = $code;
        $this->data = $data;
        $this->map  = $map;

        parent::__construct($message, $this->code);
    }

    /**
     * @return array
     */
    public function all() : array
    {
        return [
            'code'    => $this->getCode(),
            'message' => $this->getMessage(),
            'data'    => $this->getData() ?: null,
            'time'    => get_now(),
            'module'  => config('service.name'),
        ];
    }

    /**
     * @return array
     */
    public function getData() : array
    {
        return (array)$this->data;
    }

    /**
     * @param int $code
     * @return array
     */
    public function getCodeMap(int $code) : array
    {
        return array_get(static::getCodeMaps(), $code, []);
    }

    /**
     * 是否记录异常
     */
    public function needReport() : bool
    {
        return array_get($this->map, 'report', true);
    }

    /**
     * @return array
     */
    public static function getCodeMaps(): array
    {
        return static::$codeMaps;
    }

    /**
     * 异常响应
     * @param Request $request
     * @return JsonResponse
     */
    public function render(Request $request)
    {
        $data = $this->all();

        return $this->ok($data);
    }
}
