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

Route::get('login/admin', 'Auth\LoginController@showAdminLoginForm')->name('admin.login');
Route::post('/login/admin', 'Auth\LoginController@adminLogin');

Route::get('login/midwife', 'Auth\LoginController@showMidwifeLoginForm')->name('midwife.login');
Route::post('/login/midwife', 'Auth\LoginController@midwifeLogin');

Route::middleware('auth')->group(function () {
    Route::view('/', 'index');
});

Route::middleware('auth:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::view('/', 'admin.index');
    Route::resource('midwives', 'Admin\MidwifeController');
});

Route::middleware('auth:midwife')->prefix('midwife')->name('midwife.')->group(function () {
    Route::view('/midwife', 'midwife.index');
    Route::resource('users', 'Midwife\UserController');
});
