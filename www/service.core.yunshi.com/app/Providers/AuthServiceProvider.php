<?php

namespace App\Providers;

use App\Modules\Management\Business\Guard\ManagementJwtGuard;
use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Boot the authentication services for the application.
     *
     * @return void
     */
    public function boot()
    {
        // 后台管理员
        $this->app['auth']->extend('jwt-management', function ($app, $name, array $config)
        {
            return new ManagementJwtGuard($app->request, $config);
        });
    }
}
