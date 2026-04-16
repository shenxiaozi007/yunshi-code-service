<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ycrm_user_department_change_log', function (Blueprint $table) {
            $table->comment('CRM用户部门异动日志');
            $table->bigIncrements('id');
            $table->string('handle_user_type', 64)->default('')->comment('操作此数据的账户类型，CRM、CORE');
            $table->unsignedInteger('handle_user_id')->default(0)->comment('操作此数据的账户id')->index();
            $table->string('handle_user_name', 64)->default('')->comment('操作此数据的账户名称');
            $table->unsignedInteger('target_headquarters_company_id')->default(0)->comment('目标账户的本部公司id')->index();
            $table->string('target_headquarters_company_name', 128)->default('')->comment('目标账户的本部公司名称');
            $table->unsignedInteger('target_headquarters_department_id')->default(0)->comment('目标账户的本部公司的部门id')->index();
            $table->string('target_headquarters_department_name', 128)->default('')->comment('目标账户的本部公司的部门名称');
            $table->unsignedInteger('target_account_id')->default(0)->comment('员工账户id')->index();
            $table->string('real_name', 64)->default('')->comment('员工真实姓名');
            $table->string('job_sn', 64)->default('')->comment('员工工号');
            $table->string('action', 64)->default('')->comment('操作动作，入职/离职等，用枚举类管理');
            $table->string('display_name', 64)->default('')->comment('操作名称、说明');
            $table->string('content', 256)->default('')->comment('具体异动内容');
            $table->unsignedInteger('change_at')->default(0)->comment('处理时间');
            $table->unsignedInteger('add_time')->default(0)->comment('添加时间');
            $table->unsignedInteger('last_update_time')->default(0)->comment('最后更新时间');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ycrm_user_department_change_log');
    }
};
