<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bill_detail', function($table) {
            $table->increments('id')->unsigned();
            $table->integer('id_bill');
            $table->integer('id_product')->unsigned();
            $table->foreign('id_product')->references('id')->on('product');
            $table->integer('quantity');
            $table->double('unit_price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bill_detail');
    }
}
