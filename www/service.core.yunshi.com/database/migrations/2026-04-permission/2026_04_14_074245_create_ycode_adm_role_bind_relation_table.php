<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ycode_adm_role_bind_relation', function (Blueprint $table) {
            $table->comment('核心系统-角色绑定关系');
            $table->increments('id');
            $table->string('bind_relation_no', 64)->default('')->comment('权限关联编号')->unique();
            $table->string('role_no', 64)->default('')->comment('角色编号')->index();
            $table->string('permission_no', 64)->default('')->comment('权限编号')->index();
            $table->unsignedInteger('add_time')->default(0)->comment('添加时间');
            $table->unsignedInteger('last_update_time')->default(0)->comment('最后更新时间');
            $table->string('encryption_option', 32)->default('')->comment('选择的加密选项');
            $table->unsignedInteger('add_admin_id')->default(0)->comment('添加此角色的管理员id');
            $table->string('add_admin_name', 64)->default('')->comment('添加此角色的管理员真实姓名');
            $table->unsignedInteger('edit_admin_id')->default(0)->comment('最后编辑此管理员的id');
            $table->string('edit_admin_name', 64)->default('')->comment('最后编辑此角色的管理员真实姓名');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ycode_adm_role_bind_relation');
    }
};
