<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableNotice extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('notices', function (Blueprint $table) {
            $table->increments('id')->comment('公告主键');
            $table->string('content')->comment('公告内容');
            $table->string('url')->comment('跳转地址');
            $table->boolean('status')->default(1)->comment('状态');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('notices');
    }
}
