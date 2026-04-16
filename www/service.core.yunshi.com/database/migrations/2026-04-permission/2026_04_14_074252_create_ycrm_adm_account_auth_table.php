<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ycrm_adm_account_auth', function (Blueprint $table) {
            $table->comment('CRM-管理员账户认证');
            $table->increments('id');
            $table->string('account_auth_no', 64)->default('')->comment('用户auth编号')->unique();
            $table->string('account_no', 64)->default('')->comment('用户编号')->unique();
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
        Schema::dropIfExists('ycrm_adm_account_auth');
    }
};
