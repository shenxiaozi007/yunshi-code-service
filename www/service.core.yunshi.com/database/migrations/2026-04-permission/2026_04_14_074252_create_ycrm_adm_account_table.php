<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ycrm_adm_account', function (Blueprint $table) {
            $table->comment('CRM-管理员账户');
            $table->increments('id');
            $table->string('account_no', 64)->default('')->comment('用户编号')->unique();
            $table->string('position_no', 64)->default('')->comment('职位编号')->index();
            $table->unsignedInteger('grade')->default(0)->comment('职位等级');
            $table->string('role', 32)->default('')->comment('角色');
            $table->unsignedTinyInteger('sex')->default(0)->comment('性别，0=>默认值，1=>男，2=>女');
            $table->unsignedInteger('birthday')->default(0)->comment('生日，格式为：年月日');
            $table->string('job_sn', 64)->default('')->comment('工号')->index();
            $table->string('real_name', 64)->default('')->comment('成员姓名');
            $table->string('account', 64)->default('')->comment('账户')->index();
            $table->string('mobile', 32)->default('')->comment('手机号')->index();
            $table->string('identity_card', 32)->default('')->comment('身份证号码');
            $table->string('email', 64)->default('')->comment('邮箱');
            $table->string('account_status', 32)->default('')->comment('账户状态');
            $table->unsignedInteger('open_at')->default(0)->comment('注册时间');
            $table->unsignedInteger('close_at')->default(0)->comment('关闭时间');
            $table->string('avatar_id', 32)->default('')->comment('头像ID');
            $table->unsignedInteger('register_at')->default(0)->comment('入职时间');
            $table->unsignedInteger('resignation_at')->default(0)->comment('离职时间');
            $table->unsignedInteger('add_admin_id')->default(0)->comment('添加此员工的管理员id');
            $table->string('add_admin_name', 64)->default('')->comment('添加此员工的管理员真实姓名');
            $table->unsignedInteger('edit_admin_id')->default(0)->comment('最后编辑此员工管理员的id');
            $table->string('edit_admin_name', 64)->default('')->comment('最后编辑此员工的管理员真实姓名');
            $table->unsignedInteger('add_time')->default(0)->comment('添加时间');
            $table->unsignedInteger('last_update_time')->default(0)->comment('最后更新时间');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ycrm_adm_account');
    }
};
