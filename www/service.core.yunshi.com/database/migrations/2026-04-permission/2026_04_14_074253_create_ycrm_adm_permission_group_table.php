<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ycrm_adm_permission_group', function (Blueprint $table) {
            $table->comment('CRM-权限分组');
            $table->increments('id');
            $table->string('permission_group_no', 64)->default('')->comment('权限分组编号')->unique();
            $table->unsignedInteger('pid')->default(0)->comment('父权限分组 id')->index();
            $table->string('name', 50)->default('')->comment('权限组名称');
            $table->string('sys_terminal', 32)->default('')->comment('系统使用终端：用来区分是crm_app还是crm_web');
            $table->string('alias_name', 128)->default('')->comment('别名')->unique();
            $table->unsignedInteger('sort')->default(100)->comment('排序');
            $table->unsignedInteger('add_time')->default(0)->comment('添加时间');
            $table->unsignedInteger('last_update_time')->default(0)->comment('最后更新时间');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ycrm_adm_permission_group');
    }
};
