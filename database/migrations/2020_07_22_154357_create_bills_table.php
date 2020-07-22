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
        Schema::create('bill', function ($table) {
            $table->increments('id')->unsigned();
            $table->integer('id_customer')->unsigned();
            $table->foreign('id_customer')->references('id')->on('customer');
            $table->date('date_order');
            $table->double('total');
            $table->string('payment', 255);
            $table->string('note', 255);
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
