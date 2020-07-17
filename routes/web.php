<?php

use Illuminate\Support\Facades\Route;

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
 */

Route::get('/', function () {
    return view('welcome');
});

// Tạo bảng user
Route::get('database1', function () {
    Schema::create('users', function ($table) {
        $table->increments('id')->unsigned();
        $table->string('name', 255);
        $table->string('email', 255);
        $table->string('password', 255);
        $table->string('gender', 10);
        $table->integer('phone_number');
        $table->string('address', 255);
    });

    echo "Đã tạo bảng users thành công";
});

// Tạo bảng slide
Route::get('database2', function () {
    Schema::create('slide', function ($table) {
        $table->increments('id')->unsigned();
        $table->string('image', 255);
    });

    echo "Đã tạo bảng slide thành công";
});

// Tạo bảng news
Route::get('database3', function () {
    Schema::create('news', function ($table) {
        $table->increments('id')->unsigned();
        $table->string('title', 255);
        $table->text('content');
        $table->string('image', 100);
    });

    echo "Đã tạo bảng news thành công";
});

//Tạo bảng product
Route::get('database4', function () {
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

    echo "Đã tạo bảng product thành công";
});

//Tạo bảng type_products
Route::get('database5', function () {
    Schema::create('type_products', function ($table) {
        $table->integer('id')->primary();
        $table->string('name', 255);
        $table->text('description');
        $table->string('image', 255);
    });

    echo "Đã tạo bảng type_product thành công";
});

//Tạo bảng bill_detail
Route::get('database6', function () {
    Schema::create('bill_detail', function($table) {
        $table->increments('id')->unsigned();
        $table->integer('id_bill');
        $table->integer('id_product')->unsigned();
        $table->foreign('id_product')->references('id')->on('product');
        $table->integer('quantity');
        $table->double('unit_price');
    });

    echo "Đã tạo bảng bill_detail thành công";
});

//Tạo bảng bill
Route::get('database7', function () {
    Schema::create('bill', function ($table) {
        $table->increments('id')->unsigned();
        $table->integer('id_customer')->unsigned();
        $table->foreign('id_customer')->references('id')->on('customer');
        $table->date('date_order');
        $table->double('total');
        $table->string('payment', 255);
        $table->string('note', 255);
    });

    echo "Đã tạo bảng bill thành công";
});

//Tạo bảng customer
Route::get('database8', function () {
    Schema::create('customer', function ($table) {
        $table->increments('id')->unsigned();
        $table->string('name', 255);
        $table->string('gender', 10);
        $table->string('email', 255);
        $table->string('address', 255);
        $table->string('phone_number', 20);
        $table->string('note', 200);
    });

    echo "Đã tạo bảng customer thành công";
});

//Tạo bảng Account admin
Route::get('database9', function () {
    Schema::create('admin', function($table) {
        $table->increments('id')->unsigned();
        $table->string('username', 255);
        $table->string('password', 255);
    });
    
    echo "Đã tạo bảng accout admin thành công";
});

//Xóa bảng
Route::get('xoabang', function () {
    Schema::drop('bill_detail');

    echo "Đã xóa bảng thành công";
});



//Back-end
Route::get('home', 'HomeController@getHome');

//Auth

Route::get('dangnhap', function () {
    return view('layout admin/login');
});

Route::post('login', 'AuthController@adminlogin')->name('login');

