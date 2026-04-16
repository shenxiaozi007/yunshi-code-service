<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ysm_app_adm_role_bind_relation', function (Blueprint $table) {
            $table->comment('CRM_APP-角色绑定关系');
            $table->increments('id');
            $table->unsignedInteger('role_id')->default(0)->comment('角色ID')->index();
            $table->unsignedInteger('permission_id')->default(0)->comment('权限 id')->index();
            $table->string('encryption_option', 32)->default('')->comment('选择的加密选项');
            $table->unsignedInteger('add_crm_admin_id')->default(0)->comment('添加此角色的管理员id');
            $table->string('add_crm_admin_name', 64)->default('')->comment('添加此角色的管理员真实姓名');
            $table->unsignedInteger('edit_crm_admin_id')->default(0)->comment('最后编辑此角色管理员的id');
            $table->string('edit_crm_admin_name', 64)->default('')->comment('最后编辑此角色的管理员真实姓名');
            $table->unsignedInteger('add_time')->default(0)->comment('添加时间');
            $table->unsignedInteger('last_update_time')->default(0)->comment('最后更新时间');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ysm_app_adm_role_bind_relation');
    }
};
