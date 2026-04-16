<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ysm_app_adm_department_bind_relation', function (Blueprint $table) {
            $table->comment('CRM_APP-部门绑定关系');
            $table->increments('id');
            $table->unsignedInteger('department_id')->default(0)->comment('部门ID')->index();
            $table->unsignedInteger('permission_id')->default(0)->comment('权限 id')->index();
            $table->string('encryption_option', 32)->default('')->comment('选择的加密选项');
            $table->unsignedInteger('add_admin_id')->default(0)->comment('添加此部门的管理员id');
            $table->string('add_admin_name', 64)->default('')->comment('添加此部门的管理员真实姓名');
            $table->unsignedInteger('edit_admin_id')->default(0)->comment('最后编辑此部门管理员的id');
            $table->string('edit_admin_name', 64)->default('')->comment('最后编辑此部门的管理员真实姓名');
            $table->unsignedInteger('add_time')->default(0)->comment('添加时间');
            $table->unsignedInteger('last_update_time')->default(0)->comment('最后更新时间');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ysm_app_adm_department_bind_relation');
    }
};
