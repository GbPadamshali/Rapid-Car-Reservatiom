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

Route::get('/', 'admin\AdminController@login');
Route::get('/login', 'admin\AdminController@login')->name('login');
Route::post('/login', 'admin\AdminController@log_in')->name('do_login');

Route::get('/forgot', 'admin\AdminController@forgot')->name('forgot');
Route::get('/dashboard', 'admin\DashboardController@index')->name('dashboard');

// Route::group(['prefix' => 'admin', 'middleware' => 'adminauth'], function () {
//     Route::get('dashboard', 'UserController@dashboard')->name('dashboard');
// });
Route::group(['prefix' => 'dashboard'], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});

$router->group(['prefix' => 'users'], function () use ($router) {
    Route::get('/index', 'UserController@index')->name('users.index');
    Route::get('/create', 'UserController@index')->name('users.create');
    Route::get('/show/{id}', 'UserController@show')->name('users.show', '{id}');
    Route::post('/store', 'UserController@store')->name('users.store');
    Route::get('/edit/{id}', 'UserController@edit')->name('users.edit', '{id}');
    Route::post('/update/{id}', 'UserController@update')->name('users.update');
    Route::get('/delete/{id}', 'UserController@destroy')->name('users.destroy', '{id}');
});
