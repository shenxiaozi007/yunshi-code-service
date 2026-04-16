<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ycode_adm_account_bind_crm_log', function (Blueprint $table) {
            $table->comment('核心系统-管理员绑定crm用户操作记录');
            $table->bigIncrements('id');
            $table->string('log_no', 64)->default('')->comment('日志编号')->unique();
            $table->string('ycode_account_no', 64)->default('')->comment('对应ycode_adm_account')->index();
            $table->string('ycode_real_name', 64)->default('')->comment('真实姓名');
            $table->string('ysm_user_no', 64)->default('')->comment('绑定的crm账户编号')->index();
            $table->string('ysm_user_real_name', 64)->default('')->comment('绑定的crm账户真实姓名');
            $table->string('action', 32)->default('')->comment('动作：绑定，解绑');
            $table->unsignedInteger('action_at')->default(0)->comment('操作此动作的时间');
            $table->unsignedInteger('add_admin_id')->default(0)->comment('添加的管理员id');
            $table->string('add_admin_name', 64)->default('')->comment('添加的管理员真实姓名');
            $table->unsignedInteger('add_time')->default(0)->comment('添加时间戳');
            $table->unsignedInteger('last_update_time')->default(0)->comment('最后编辑时间');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ycode_adm_account_bind_crm_log');
    }
};
