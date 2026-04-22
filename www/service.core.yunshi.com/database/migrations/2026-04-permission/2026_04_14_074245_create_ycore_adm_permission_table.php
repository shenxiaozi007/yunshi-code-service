<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ycore_adm_permission', function (Blueprint $table) {
            $table->comment('核心系统-权限');
            $table->increments('id');
            $table->string('permission_no', 64)->default('')->comment('权限编号')->unique();
            $table->string('permission_group_no', 64)->default('')->comment('权限分组编号')->index();
            $table->string('name', 64)->default('')->comment('权限名称');
            $table->unsignedTinyInteger('is_init')->default(0)->comment('是否是超级管理员初始权限');
            $table->string('group_alias', 128)->default('')->comment('组别名')->index();
            $table->string('alias_name', 128)->default('')->comment('别名')->unique();
            $table->string('display_name', 50)->default('')->comment('权限显示名称');
            $table->json('client_route_name')->nullable()->comment('前端路由名称');
            $table->json('proxy_route_name')->nullable()->comment('网页代理的路由名称');
            $table->unsignedInteger('add_time')->default(0)->comment('添加时间');
            $table->unsignedInteger('last_update_time')->default(0)->comment('最后更新时间');
            $table->json('encryption_options')->nullable()->comment('加密选项，当此选项不为null，则可以选择加密选项');
            $table->string('security_category', 32)->default('')->comment('权限安全分类');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ycore_adm_permission');
    }
};
