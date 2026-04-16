<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ycrm_adm_data_permission_group', function (Blueprint $table) {
            $table->comment('CRM-数据权限分组');
            $table->increments('id');
            $table->unsignedInteger('pid')->default(0)->comment('父权限分组 id')->index();
            $table->string('name', 50)->default('')->comment('权限组名称');
            $table->string('alias_name', 128)->default('')->comment('别名')->unique();
            $table->unsignedInteger('sort')->default(100)->comment('排序');
            $table->unsignedInteger('add_time')->default(0)->comment('添加时间');
            $table->unsignedInteger('last_update_time')->default(0)->comment('最后更新时间');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ycrm_adm_data_permission_group');
    }
};
