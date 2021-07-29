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

    Route::resource('children', 'ChildController')->except(['index']);

    Route::resource('appointments', 'AppointmentController')->except(['show', 'destroy']);
    Route::get('appointments/received', 'AppointmentController@received')->name('appointments.received');
    Route::get('appointments/cancel/{appointment}', 'AppointmentController@cancel')->name('appointments.cancel');
    Route::get('appointments/approve/{appointment}', 'AppointmentController@approve')->name('appointments.approve');
    Route::get('appointments/decline/{appointment}', 'AppointmentController@decline')->name('appointments.decline');

    Route::get('profile', 'HomeController@showProfile')->name('profile');
    Route::put('profile/save', 'HomeController@saveProfile')->name('profile.save');
    Route::post('change/password', 'HomeController@updatePassword')->name('update.password');
});

Route::middleware('auth:admin')->group(function () {
    Route::get('/admin', 'Admin\AdminDashboardController@index');

    Route::prefix('admin')->name('admin.')->namespace('Admin')->group(function () {

        Route::resource('midwives', 'MidwifeController');

        Route::get('midwife/user/{user}', 'MidwifeController@showUser')->name('show.user');
        Route::get('midwife/user/child/{child}', 'MidwifeController@showChild')->name('show.child');

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

        Route::resource('appointments', 'AppointmentController')->except(['show', 'create']);
        Route::get('appointments/create/{user}', 'AppointmentController@create')->name('appointments.create');
        Route::get('appointments/received', 'AppointmentController@received')->name('appointments.received');
        Route::get('appointments/cancel/{appointment}', 'AppointmentController@cancel')->name('appointments.cancel');
        Route::get('appointments/approve/{appointment}', 'AppointmentController@approve')->name('appointments.approve');
        Route::get('appointments/decline/{appointment}', 'AppointmentController@decline')->name('appointments.decline');

        Route::get('users/child/{child}', 'UserController@showChild')->name('show.child');

        Route::get('child/newborn/{child}', 'UserController@createNewborn')->name('create.newborn');
        Route::post('child/newborn', 'UserController@storeNewborn')->name('store.newborn');

        Route::get('profile', 'MidwifeDashboardController@showProfile')->name('profile');
        Route::put('profile/save', 'MidwifeDashboardController@saveProfile')->name('profile.save');
        Route::post('change/password', 'MidwifeDashboardController@updatePassword')->name('update.password');
    });

});
