<?php

namespace App\Providers;

use App\Modules\Basics\Rules\Certificate;
use App\Modules\Basics\Rules\Mobile;
use App\Modules\Basics\Rules\Password;
use App\Modules\Basics\Rules\Username;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
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

    public function boot()
    {
        $this->bootValidator();

        Validator::includeUnvalidatedArrayKeys();
    }

    /**
     * 注册验证器
     */
    protected function bootValidator()
    {
        app('validator')->extend('id_card', function ($attribute, $value, $parameters, $validator) {
            return (new Certificate())->idCard($attribute, $value, $parameters);
        });

        app('validator')->extend('user_password', function ($attribute, $value, $parameters, $validator) {
            return (new Password())->validate($attribute, $value, $parameters);
        });

        app('validator')->extend('mobile', function ($attribute, $value, $parameters, $validator) {
            return (new Mobile())->validate($attribute, $value, $parameters);
        });

        app('validator')->extend('username', function ($attribute, $value, $parameters, $validator) {
            return (new Username())->validate($attribute, $value, $parameters);
        });
    }
}
