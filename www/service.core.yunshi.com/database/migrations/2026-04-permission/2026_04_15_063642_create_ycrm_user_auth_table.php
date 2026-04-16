<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ycrm_user_auth', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ycrm_user_id')->default(0)->comment('用户id')->index();
            $table->string('password', 64)->default('')->comment('密码');
            $table->string('salt', 32)->default('')->comment('盐');
            $table->unsignedInteger('add_time')->default(0)->comment('添加时间');
            $table->unsignedInteger('last_update_time')->default(0)->comment('最后更新时间');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ycrm_user_auth');
    }
};
