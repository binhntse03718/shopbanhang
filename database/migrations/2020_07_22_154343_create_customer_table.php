<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer', function ($table) {
            $table->increments('id')->unsigned();
            $table->string('name', 255);
            $table->string('gender', 10);
            $table->string('email', 255);
            $table->string('address', 255);
            $table->string('phone_number', 20);
            $table->string('note', 200);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer');
    }
}
