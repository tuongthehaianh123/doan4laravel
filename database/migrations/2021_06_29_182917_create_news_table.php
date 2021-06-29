<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('title', 200)->comment('tiêu đề');
            $table->text('content')->comment('nội dung');
            $table->string('image', 100)->comment('hình');
            $table->timestamp('create_at')->useCurrent();
            $table->timestamp('update_at')->default('0000-00-00 00:00:00');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
}
