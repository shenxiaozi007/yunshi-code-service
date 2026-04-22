<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ycore_adm_operation_log', function (Blueprint $table) {
            $table->comment('核心系统-用户登录日志');
            $table->increments('id');
            $table->string('operation_log_no', 64)->default('')->comment('日志编号')->unique();
            $table->string('account_no', 64)->default('')->comment('用户编号')->index();
            $table->string('account', 32)->default('')->comment('登录账号');
            $table->string('action', 32)->default('')->comment('动作');
            $table->string('ip', 128)->default('')->comment('登录ip')->index();
            $table->unsignedInteger('province_id')->default(0)->comment('省份id')->index();
            $table->string('remark', 1000)->default('')->comment('备注');
            $table->string('province', 32)->default('')->comment('省份名称');
            $table->unsignedInteger('city_id')->default(0)->comment('城市id');
            $table->string('city', 32)->default('')->comment('城市名称');
            $table->string('app_imei', 32)->default('')->comment('app的IMEI码');
            $table->text('request_header')->comment('请求Header头');
            $table->unsignedInteger('add_time')->default(0)->comment('添加时间');
            $table->unsignedInteger('last_update_time')->default(0)->comment('最后更新时间');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ycore_adm_operation_log');
    }
};
