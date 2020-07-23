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
use App\Model\Admin;

Route::get('/', function () {
    return view('welcome');
});

//Back-end
Route::get('home', 'HomeController@getHome');

//Auth
Route::get('dangnhap', 'AdminController@ViewResult');

Route::post('dangnhap', 'AdminController@AdminLogin')->name('login');

//Admin
Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'slide'], function () {
        Route::get('listSlide', 'AdminSlideController@listSlide');

        Route::get('addSlide', 'AdminSlideController@addSlide');

        Route::get('changeSlide', 'AdminSlideController@changeSlide');
    });

    Route::group(['prefix' => 'product'], function () {
        Route::get('listProduct', 'AdminProductController@listProduct');

        Route::get('addProduct', 'AdminProductController@addProduct');

        Route::get('changeProduct', 'AdminProductController@changeProduct');
    });

    Route::group(['prefix' => 'new'], function () {

        Route::get('listNew', 'AdminNewController@listNew');

        Route::get('addNew', 'AdminNewController@addNew');

        Route::get('changeNew', 'AdminNewController@changeNew');
    });

    Route::group(['prefix' => 'user'], function () {

        Route::get('listUser', 'AdminUserController@listUser');

        Route::get('addUser', 'AdminUserController@addUser');

        Route::get('changeUser', 'AdminUserController@changeUser');
    });
});
