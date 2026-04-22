<?php

namespace App\Http\Middleware;

use App\Modules\Basics\Constant\Rbac\WebRoute;
use App\Modules\Basics\Constant\Rbac\WebRouteTag;
use App\Modules\Basics\Dao\System\CoreOperationLogDao;
use Closure;
use Exception;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\BinaryFileResponse;

class RecordWebRouteLog
{
    /**
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // 当前路由别名
        $currentRouteName = get_current_route_name();

        $tags = get_current_route_tags($currentRouteName);
        if (!in_array(WebRouteTag::LOG, $tags))
        {
            return $next($request);
        }

        $response = $next($request);

        if (
            isset($response->original)
            && isset($response->original['code'])
            && $response->original['code'] == 0
        ) {
            $this->saveOperationLog($request, $currentRouteName);
        }
        elseif ($response instanceof BinaryFileResponse)
        {
            $this->saveOperationLog($request, $currentRouteName);
        }

        return $response;
    }

    /**
     * 保存操作日志
     *
     * @param $request
     * @param $currentRouteName
     */
    protected function saveOperationLog($request, $currentRouteName)
    {
        try
        {
            $params = [
                'operation_no'      => snow_flake_id(),
                'account_id'        => management_auth_info_id(),
                'account_name'      => management_auth_info_name(),
                'terminal'          => 'web',
                'ip'                => get_real_ip(),
                'display_name'      => WebRoute::getName($currentRouteName),
                'api_route_name'    => $currentRouteName,
                'api_full_url'      => $request->fullUrl(),
                'header'            => $request->headers->all(),
                'content'           => $request->all(),
            ];

            CoreOperationLogDao::getInstance()->store($params);
        }
        catch (Exception $e)
        {
            info('===============================');
            info('生成操作日志失败！');
            info('===============================');
            info($e->getMessage());
            info($e->getTraceAsString());
        }
    }
}
