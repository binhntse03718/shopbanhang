<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function ($table) {
            $table->increments('id')->unsigned();
            $table->string('name', 255);
            $table->integer('id_type')->nullable();
            $table->foreign('id_type')->references('id')->on('type_products');
            $table->text('description');
            $table->string('unit_price');
            $table->string('promotion_price')->nullable();
            $table->string('image', 255);
            $table->string('unit', 255);
            $table->string('new', 255);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
