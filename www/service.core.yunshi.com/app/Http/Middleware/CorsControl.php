<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CorsControl
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // 所有option请求不走业务
        if ('OPTIONS' == $request->getMethod())
        {
            /** @var Response $response */
            $response = app(Response::class);
            $response->setStatusCode(204);
            $response->headers->set('Access-Control-Allow-Methods', 'POST, GET, DELETE, OPTIONS, DELETE');
            $response->headers->set('Access-Control-Allow-Headers', 'Management-Authorization, Content-Type, x-requested-with');
            $response->headers->set('Access-Control-Allow-Origin', '*');
            $response->headers->set('Access-Control-Allow-Private-Network', 'true');

            return $response;
        }

        $response = $next($request);

        $response->headers->set('Access-Control-Allow-Origin', '*');

        return $response;
    }
}
