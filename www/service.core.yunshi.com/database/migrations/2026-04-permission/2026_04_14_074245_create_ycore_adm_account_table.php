<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ycore_adm_account', function (Blueprint $table) {
            $table->comment('核心系统-管理员账户');
            $table->increments('id');
            $table->string('account_no', 64)->default('')->comment('用户编号')->unique();
            $table->string('account', 128)->default('')->comment('公司工号')->index();
            $table->string('real_name', 64)->default('')->comment('真实姓名');
            $table->string('bind_ysm_user_no', 64)->default('')->comment('对应ysm_user.user_no')->index();
            $table->string('mobile', 32)->default('')->comment('手机号')->index();
            $table->string('email', 64)->default('')->comment('邮箱');
            $table->unsignedInteger('role_id')->default(0)->comment('成员角色id')->index();
            $table->unsignedInteger('open_at')->default(0)->comment('注册时间');
            $table->string('account_status', 32)->default('')->comment('账户状态');
            $table->unsignedInteger('close_at')->default(0)->comment('关闭时间');
            $table->string('avatar_id', 32)->default('')->comment('头像ID');
            $table->unsignedInteger('add_time')->default(0)->comment('添加时间');
            $table->unsignedInteger('last_update_time')->default(0)->comment('最后更新时间');
            $table->string('department_no', 64)->default('')->comment('所属部门编号')->index();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ycore_adm_account');
    }
};
