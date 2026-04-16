<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ycrm_adm_data_permission', function (Blueprint $table) {
            $table->comment('CRM-数据权限');
            $table->increments('id');
            $table->unsignedInteger('group_id')->default(0)->comment('权限分组 id')->index();
            $table->string('name', 64)->default('')->comment('权限名称');
            $table->string('group_alias', 128)->default('')->comment('组别名')->index();
            $table->string('alias_name', 128)->default('')->comment('别名')->unique();
            $table->string('export_type', 32)->default('')->comment('报表类型');
            $table->unsignedInteger('add_time')->default(0)->comment('添加时间');
            $table->unsignedInteger('last_update_time')->default(0)->comment('最后更新时间');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ycrm_adm_data_permission');
    }
};
