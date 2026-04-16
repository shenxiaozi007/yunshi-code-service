<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ycrm_user_position', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 30)->default('')->comment('职位名称');
            $table->unsignedTinyInteger('position_grade')->default(0)->comment('职位等级');
            $table->string('remark', 512)->default('')->comment('描述');
            $table->unsignedInteger('add_core_adm_id')->default(0)->comment('添加此角色的管理员id');
            $table->string('add_core_adm_name', 64)->default('')->comment('添加此角色的管理员真实姓名');
            $table->unsignedInteger('edit_core_adm_id')->default(0)->comment('最后编辑此角色的管理员的id');
            $table->string('edit_core_adm_name', 64)->default('')->comment('最后编辑此角色的管理员真实姓名');
            $table->unsignedInteger('add_time')->default(0)->comment('添加时间');
            $table->unsignedInteger('last_update_time')->default(0)->comment('最后更新时间');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ycrm_user_position');
    }
};
