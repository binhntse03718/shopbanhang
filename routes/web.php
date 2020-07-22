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

//check
Route::get('thu', function() {
    $thu = App\Model\Admin::find(1);

    echo $thu;
});
