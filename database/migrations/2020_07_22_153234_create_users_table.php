<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function ($table) {
            $table->increments('id')->unsigned();
            $table->string('name', 255);
            $table->string('email', 255);
            $table->string('password', 255);
            $table->string('gender', 10);
            $table->integer('phone_number');
            $table->string('address', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
