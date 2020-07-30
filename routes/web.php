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
    Route::get('dashboard', function() {
        return view('layout_admin.dashboard');
    });

    Route::group(['prefix' => 'slide'], function () {
        Route::get('listSlide', 'AdminSlideController@listSlide');

        Route::get('addSlide', 'AdminSlideController@get_addSlide');
        Route::post('addSlide', 'AdminSlidetController@post_addSlide');

        Route::get('changeSlide/{id}', 'AdminSlideController@get_changeSlide');
        Route::post('changeSlide/{id}', 'AdminSlideController@post_changeSlide');
    });

    Route::group(['prefix' => 'product'], function () {
        Route::get('listProduct', 'AdminProductController@listProduct');

        Route::get('addProduct', 'AdminProductController@get_addProduct');
        Route::post('addProduct', 'AdminProductController@post_addProduct');

        Route::get('changeProduct', 'AdminProductController@get_changeProduct');
        Route::post('changeProduct', 'AdminProductController@post_changeProduct');
    });

    Route::group(['prefix' => 'new'], function () {
        Route::get('listNew', 'AdminNewController@listNew');

        Route::get('addNew', 'AdminNewController@get_addNew');
        Route::post('addNew', 'AdminNewController@post_addNew');

        Route::get('changeNew', 'AdminNewController@get_changeNew');
        Route::post('changeNew', 'AdminProductController@post_changeNew');
    });

    Route::group(['prefix' => 'user'], function () {

        Route::get('listUser', 'AdminUserController@listUser');

        Route::get('addUser', 'AdminUserController@get_addUser');
        Route::post('addUser', 'AdminUsertController@post_addUser');

        Route::get('changeUser', 'AdminUserController@get_changeUser');
        Route::post('changeUser', 'AdminProductController@post_changeUser');
    });
});
