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
    Route::get('/', 'HomeController@index');
    Route::resource('children', 'ChildController');
});

Route::middleware('auth:admin')->group(function () {
    Route::get('/admin', 'Admin\AdminDashboardController@index');

    Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function () {
        Route::resource('midwives', 'MidwifeController');
        Route::resource('admins', 'AdminController');
        Route::get('profile', 'AdminDashboardController@showProfile')->name('profile');
        Route::put('profile/save', 'AdminDashboardController@saveProfile')->name('profile.save');
        Route::post('change/password', 'AdminDashboardController@updatePassword')->name('update.password');
    });
});

Route::middleware('auth:midwife')->group(function () {
    Route::get('/midwife', 'Midwife\MidwifeDashboardController@index');

    Route::prefix('midwife')->name('midwife.')->namespace('Midwife')->group(function () {
        Route::resource('users', 'UserController');
        Route::get('profile', 'MidwifeDashboardController@showProfile')->name('profile');
        Route::post('change/password', 'MidwifeDashboardController@updatePassword')->name('update.password');
    });

});
