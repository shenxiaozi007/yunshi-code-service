<?php

namespace App\Kernel\Base;

use App\Kernel\Traits\ApiResponseTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Validation\Concerns\ValidatesAttributes;
use Laravel\Lumen\Routing\Controller;

/**
 * Class BaseController
 * @package App\Kernel\Base
 */
class BaseController extends Controller
{
    use ApiResponseTrait;
    use ValidatesAttributes;

    /**
     * 接口响应
     * @param $data
     * @param string $message
     * @param int $code
     * @return array|JsonResponse|null
     */
    protected function revert($data, string $message = '', int $code = 0)
    {
        if (is_object($data) && method_exists($data, 'toArray')) {
            $data = $data->toArray();
        } else if (!is_null($data) && !is_array($data)) {
            $data = (array)$data;
        }

        if (isset($data['code']) && isset($data['data']) && isset($data['module'])) {
            if ($message) {
                $data['message'] = $message;
            }

            return $data;
        }

        $response = [
            'code'    => $code,
            'message' => $message ?: 'success!',
            'data'    => $data,
            'time'    => get_now(),
            'module'  => config('service.name'),
        ];

        return $this->ok($response);
    }
}
