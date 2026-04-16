<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ycrm_adm_account_bind_role', function (Blueprint $table) {
            $table->comment('CRM-管理员绑定角色');
            $table->increments('id');
            $table->string('account_bind_role_no', 64)->default('')->comment('关系编号')->unique();
            $table->string('role_no', 64)->default('')->comment('角色no')->index();
            $table->string('account_no', 64)->default('')->comment('用户编号')->index();
            $table->string('encryption_option', 32)->default('')->comment('选择的加密选项');
            $table->unsignedInteger('add_admin_id')->default(0)->comment('添加此角色的管理员id');
            $table->string('add_admin_name', 64)->default('')->comment('添加此角色的管理员真实姓名');
            $table->unsignedInteger('edit_admin_id')->default(0)->comment('最后编辑此角色管理员的id');
            $table->string('edit_admin_name', 64)->default('')->comment('最后编辑此角色的管理员真实姓名');
            $table->unsignedInteger('add_time')->default(0)->comment('添加时间');
            $table->unsignedInteger('last_update_time')->default(0)->comment('最后更新时间');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ycrm_adm_account_bind_role');
    }
};
