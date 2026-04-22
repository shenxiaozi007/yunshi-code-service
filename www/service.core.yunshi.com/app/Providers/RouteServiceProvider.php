<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class RouteServiceProvider
 * @package App\Providers
 */
class RouteServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected bool $defer = false;

    /**
     * 转换后(一维)的路由规则配置
     * @var array
     */
    protected array $routeFormat = [];

    /**
     * 路由规则配置
     * @var array
     */
    protected array $routes = [

        /*
         * 管理端
         */
        'management' => [
            'proxy' => [
                'domain'     => 'domain.management_web_proxy',
                'prefix'     => 'management/proxy',
                'namespace'  => 'App\Http\Controllers\Management\Proxy',
                'middleware' => [
                    'cors',
                    'management.rbac',
                    'hide_non_broker',
                    'record.log',
                ],
                'files'      => [
                    'routes/management/proxy/rbac/sys_permission_group.php',
                    'routes/management/proxy/rbac/sys_permission.php',
                    'routes/management/proxy/rbac/sys_report_permission.php',
                    'routes/management/proxy/rbac/sys_role.php',
                    'routes/management/proxy/rbac/sys_role_permission_relation.php',
                    'routes/management/proxy/rbac/sys_user.php',
                    'routes/management/proxy/crm_rbac/role.php',
                    'routes/management/proxy/crm_rbac/user.php',
                    'routes/management/proxy/crm_rbac/permission_group.php',
                    'routes/management/proxy/crm_rbac/report_permission_group.php',
                    'routes/management/proxy/crm_rbac/role_permission_relation.php',
                ],
            ],
        ],

        /**
         * 对外服务
         */
        'service' => [
            'api' => [
                'v1' => [
                    'domain' => 'domain.service',
                    'prefix' => 'service/api/v1',
                    'namespace' => 'App\Http\Controllers\Service\Api\V1',
                    'middleware' => ['cors'],
                    'files' => [

                    ],
                ]
            ]
        ],

        /*
         * 公共 后续加上。
         */
        'common' => [
            'domain' => '*',
            'prefix' => 'common',
            'namespace' => 'App\Http\Controllers\Common',
            'middleware' => ['cors'],
            'files' => [
                // 'routes/common/common.php',
            ],
        ],

    ];

    /**
     * 启动
     */
    public function boot()
    {
        $this->mapRoutes();
    }

    /**
     * 加载路由
     */
    protected function mapRoutes()
    {
        $this->parseRoutes($this->routes);

        $domain = head(explode(':', get_http_host()));

        foreach ($this->routeFormat as $route)
        {
            if (
                isset($route['domain'])
                && $route['domain'] != '*'
                && $domain != config($route['domain'])
            ) {
                continue;
            }

            $this->loadRoutes($route);
        }
    }

    /**
     * 解析路由分组结构
     * @param array $routes
     * @return void
     */
    protected function parseRoutes(array $routes) :void
    {
        foreach ($routes as $routeInfo)
        {
            if (is_array($routeInfo) && !isset($routeInfo['files']))
            {
                $this->parseRoutes($routeInfo);
            }

            if (isset($routeInfo['files']) && filled($routeInfo['files']))
            {
                $this->routeFormat[] = $routeInfo;
            }
        }
    }

    /**
     * 加载路由
     * @param $route
     */
    protected function loadRoutes($route)
    {
        if (isset($route['files']))
        {
            foreach ($route['files'] as $file)
            {
                $this->loadRoutesFromFile($route, $file);
            }
        }
    }

    /**
     * 从文件中加载路由
     * @author  kkk
     * @param $route
     * @param $file
     */
    protected function loadRoutesFromFile($route, $file)
    {
        $files = get_files(get_file_absolute_app_path($file));

        foreach($files as $value)
        {
            $this->app->router->group(
                array_only($route, ['namespace', 'prefix', 'middleware']),
                function ($router) use ($value)
                {
                    require $value;
                }
            );
        }
    }
}
