<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ycore_sales', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sales_no', 64)->default('')->comment('销售编号')->unique();
            $table->string('sales_source', 32)->default('')->comment('销售来源,CRM');
            $table->string('job_sn', 64)->default('')->comment('工号')->index();
            $table->string('real_name', 64)->default('')->comment('成员姓名');
            $table->unsignedInteger('add_time')->default(0)->comment('添加时间');
            $table->unsignedInteger('last_update_time')->default(0)->comment('最后更新时间');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ycore_sales');
    }
};
