<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ycrm_user_core_headquarters_department', function (Blueprint $table) {
            $table->comment('CRM用户加入部门记录');
            $table->bigIncrements('id');
            $table->string('relation_no', 64)->default('')->comment('唯一编号')->unique();
            $table->string('user_no', 64)->default('')->comment('用户编号')->index();
            $table->string('department_no', 64)->default('')->comment('部门编号')->index();
            $table->unsignedInteger('join_date')->default(0)->comment('加入部门日期')->index();
            $table->unsignedInteger('leave_date')->default(0)->comment('离开部门日期')->index();
            $table->unsignedInteger('created_admin_id')->default(0)->comment('创建管理员ID');
            $table->string('created_admin_name', 64)->default('')->comment('创建管理员姓名');
            $table->unsignedInteger('last_edit_admin_id')->default(0)->comment('最后更新管理员ID');
            $table->string('last_edit_admin_name', 64)->default('')->comment('最后更新管理员姓名');
            $table->unsignedInteger('add_time')->default(0)->comment('添加时间戳');
            $table->unsignedInteger('last_update_time')->default(0)->comment('最后编辑时间');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ycrm_user_core_headquarters_department');
    }
};
