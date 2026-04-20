<?php

namespace App\Http\Middleware\Permission;

use App\Exceptions\Common\AuthException;
use App\Modules\Basics\Business\BaseBusiness;
use App\Modules\Basics\Constant\Rbac\EncryptionOption;
use App\Modules\Basics\Constant\Rbac\WebRoute;
use App\Modules\Basics\Constant\Rbac\WebRouteTag;
use Closure;
use Illuminate\Http\Response;

/**
 * 验证用户是否有请求权限
 *
 */
abstract class AccessControl
{
    /**
     * @return int
     */
    abstract protected function getUserId(): int;

    /**
     * @return BaseBusiness
     */
    abstract protected function getPermissionBusiness(): BaseBusiness;

    /**
     * @param $request
     * @param Closure $next
     * @return Response
     * @throws AuthException
     */
    public function handle($request, Closure $next)
    {
        // 校验权限，及获取加密级别
        $encrypt = $this->getEncrypt();

        /** @var Response $response */
        $response = $next($request);

        // 根据加密级别，对返回报文进行加密
        if (
            filled($encrypt)
            && in_array($encrypt, EncryptionOption::all())
        ) {
            // 获取返回报文
            $responseContent = $response->getOriginalContent();

            $data = array_get($responseContent, 'data');
            if ($data)
            {
                if (is_object($data) && method_exists($data, 'toArray'))
                {
                    $data = $data->toArray();
                }
                else if (!is_array($data))
                {
                    $data = (array)$data;
                }

                /** @var \App\Modules\Management\Business\Guard\Rbac\CorePermissionBusiness $business */
                $business = static::getPermissionBusiness();

                // 对返回报文进行加密
                $data = $business->getEncryptResponseContent($encrypt, $data);

                $responseContent['data'] = $data;

                $response->setContent(json_encode($responseContent));
            }
        }

        return $response;
    }

    /**
     * 检查权限
     * @return bool|string
     * @throws AuthException
     */
    protected function getEncrypt(): bool|string
    {
        // 当前路由别名
        $currentRouteName       = get_current_route_name();

        // 当前路由名称
        $currentRouteRealName   = get_route_real_name($currentRouteName);

        // 需要权限、开启了权限验证
        if (
            in_array(WebRouteTag::AUTH_NEEDLESS, get_current_route_tags($currentRouteName))
            || !config('app.open_access_controller', true)
        ) {
            return '';
        }

        //获取不到用户登录信息，抛出未登录异常
        if (!$adminId = static::getUserId())
        {
            throw new AuthException(400002);
        }


        /** @var \App\Modules\Management\Business\Guard\Rbac\CorePermissionBusiness $business */
        $business = static::getPermissionBusiness();

        // 通过服务端路由名名称判断是否有权限
        return $business->getEncrypt($adminId, $currentRouteRealName);
    }
}
