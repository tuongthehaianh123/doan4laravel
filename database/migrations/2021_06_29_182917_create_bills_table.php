<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_customer')->nullable()->index('bills_ibfk_1');
            $table->date('date_order')->nullable();
            $table->string('total')->nullable()->comment('tổng tiền');
            $table->string('payment', 200)->nullable()->comment('hình thức thanh toán');
            $table->string('note', 500)->nullable();
            $table->string('oder_status', 50);
            $table->timestamp('created_at')->nullable()->useCurrent();
            $table->timestamp('updated_at')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bills');
    }
}
