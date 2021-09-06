<?php

use Illuminate\Support\Facades\Auth;
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

Route::group(['prefix' => 'admin'], function () {

    Route::get('/', 'admin\AdminController@login');
    Route::get('/login', 'admin\AdminController@login')->name('login');
    Route::post('/login', 'admin\AdminController@log_in')->name('do_login');

    Route::get('/forgot', 'admin\AdminController@forgot')->name('forgot');
    Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
        Route::get('/dashboard', 'admin\DashboardController@index')->name('admin.dashboard');
    });

    Route::group(['prefix' => 'user'], function () {
        Route::get('dashboard', 'DashboardController@index')->name('user.dashboard');
    });

    Route::group(['prefix' => 'users'], function () {
        Route::get('/', 'admin\UserController@index')->name('admin.users.index');
        Route::get('/create', 'admin\UserController@create')->name('admin.users.create');
        Route::get('/show/{id}', 'admin\UserController@show')->name('admin.users.show', '{id}');
        Route::post('/store', 'admin\UserController@store')->name('admin.users.store');
        Route::get('/edit/{id}', 'admin\UserController@edit')->name('admin.users.edit', '{id}');
        Route::post('/update/{id}', 'admin\UserController@update')->name('admin.users.update');
        Route::get('/delete/{id}', 'admin\UserController@destroy')->name('admin.users.destroy', '{id}');
    });
});
