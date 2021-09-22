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
Auth::routes();
Route::get('/', 'DashboardController@front_dashboard');
Route::group(['prefix' => 'user'], function () {
    Route::get('/dashboard', 'DashboardController@index')->name('user.dashboard');
    
    Route::post('/get_car_data', 'front\CarController@get_car_data')->name('user.get_car_data');
});

Route::get('/car-listing', 'front\CarController@car_list')->name('user.carlist');
Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');
Route::group(['prefix' => 'admin'], function () {

    Route::get('/', 'admin\AdminController@login');
    Route::get('/login', 'admin\AdminController@login')->name('login');
    Route::post('/login', 'admin\AdminController@log_in')->name('do_login');

    Route::get('/forgot', 'admin\AdminController@forgot')->name('forgot');
    Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
        Route::get('/dashboard', 'admin\DashboardController@index')->name('admin.dashboard');
    });

/*    Route::group(['prefix' => 'user'], function () {
        Route::get('/dashboard', 'DashboardController@index')->name('user.dashboard');
    });*/

    Route::group(['prefix' => 'users'], function () {
        Route::get('/', 'admin\UserController@index')->name('admin.users.index');
        Route::get('/create', 'admin\UserController@create')->name('admin.users.create');
        Route::get('/show/{id}', 'admin\UserController@show')->name('admin.users.show', '{id}');
        Route::post('/store', 'admin\UserController@store')->name('admin.users.store');
        Route::get('/edit/{id}', 'admin\UserController@edit')->name('admin.users.edit', '{id}');
        Route::post('/update/{id}', 'admin\UserController@update')->name('admin.users.update');
        Route::get('/delete/{id}', 'admin\UserController@destroy')->name('admin.users.destroy', '{id}');
    });

    Route::group(['prefix' => 'cars'], function () {
        Route::get('/', 'admin\CarController@index')->name('admin.cars.index');
        Route::get('/create', 'admin\CarController@create')->name('admin.cars.create');
        Route::get('/show/{id}', 'admin\CarController@show')->name('admin.cars.show', '{id}');
        Route::post('/store', 'admin\CarController@store')->name('admin.cars.store');
        Route::get('/edit/{id}', 'admin\CarController@edit')->name('admin.cars.edit', '{id}');
        Route::post('/update/{id}', 'admin\CarController@update')->name('admin.cars.update');
        Route::delete('/delete/{id}', 'admin\CarController@destroy')->name('admin.cars.destroy', '{id}');
        Route::post('changestatus', 'admin\CarController@changestatus')->name('admin.cars.changestatus');
        Route::delete('deleteimage/{id}', 'admin\CarController@deleteimage')->name('admin.cars.deleteimage');

    });

    Route::group(['prefix' => 'vehicles'], function () {
        Route::get('/', 'admin\VehicleController@index')->name('admin.vehicles.index');
        Route::get('/create', 'admin\VehicleController@create')->name('admin.vehicles.create');
        Route::get('/show/{id}', 'admin\VehicleController@show')->name('admin.vehicles.show', '{id}');
        Route::post('/store', 'admin\VehicleController@store')->name('admin.vehicles.store');
        Route::get('/edit/{id}', 'admin\VehicleController@edit')->name('admin.vehicles.edit', '{id}');
        Route::post('/update/{id}', 'admin\VehicleController@update')->name('admin.vehicles.update');
        Route::delete('/delete/{id}', 'admin\VehicleController@destroy')->name('admin.vehicles.destroy', '{id}');
        Route::post('changestatus', 'admin\VehicleController@changestatus')->name('admin.vehicles.changestatus');
        Route::delete('deleteimage/{id}', 'admin\VehicleController@deleteimage')->name('admin.vehicles.deleteimage');

    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
