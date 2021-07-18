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

Route::view('/', 'auth.login');

Auth::routes(['register' => false]);

Route::get('login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::post('/login/admin', 'Auth\LoginController@adminLogin');

Route::get('login/midwife', 'Auth\LoginController@showMidwifeLoginForm');
Route::post('/login/midwife', 'Auth\LoginController@midwifeLogin');

Route::middleware('auth')->group(function () {
    Route::get('/home', 'HomeController@index')->name('home');
});

Route::middleware('auth:admin')->group(function () {
    //Route::get('/admin', 'AdminController@index')->name('home');
    Route::view('/admin', 'admin');
});

Route::middleware('auth:midwife')->group(function () {
    //Route::get('/midwife', 'MidwifeController@index')->name('home');
    Route::view('/midwife', 'midwife');
});
