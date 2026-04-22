<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ycore_headquarters_department', function (Blueprint $table) {
            $table->comment('核心系统-总部部门');
            $table->increments('id');
            $table->string('department_no', 64)->default('')->comment('部门编号')->unique();
            $table->string('department_sn', 64)->default('')->comment('部门编号（人工录入）');
            $table->string('department_type', 64)->default('')->comment('部门类型：内勤，销售');
            $table->unsignedInteger('pid')->default(0)->comment('上级的分组id')->index();
            $table->unsignedMediumInteger('deep')->default(0)->comment('深度');
            $table->unsignedMediumInteger('left')->default(0)->comment('左值');
            $table->unsignedMediumInteger('right')->default(0)->comment('右值');
            $table->string('name', 128)->default('')->comment('部门名称');
            $table->unsignedInteger('department_created_date')->default(0)->comment('部门创建日期格式：Ymd');
            $table->string('remark', 512)->default('')->comment('部门描述');
            $table->unsignedInteger('add_admin_id')->default(0)->comment('添加此部门的管理员id');
            $table->string('add_admin_name', 64)->default('')->comment('添加此部门的管理员真实姓名');
            $table->unsignedInteger('edit_admin_id')->default(0)->comment('最后编辑此部门的管理员的id');
            $table->string('edit_admin_name', 64)->default('')->comment('最后编辑此部门的管理员真实姓名');
            $table->unsignedInteger('add_time')->default(0)->comment('添加时间');
            $table->unsignedInteger('last_update_time')->default(0)->comment('最后更新时间');
            $table->string('leader_user_no', 64)->default('')->comment('部门长编码');
            $table->string('department_alias', 64)->default('')->comment('部门别名');
            $table->string('department_status', 32)->default('')->comment('部门状态：解散，正常');
            $table->unsignedInteger('department_sort')->default(0)->comment('部门排序');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ycore_headquarters_department');
    }
};
