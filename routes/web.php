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

Route::get('/', 'admin\UserController@login');
Route::get('/login', 'admin\UserController@login');
Route::post('/login', 'admin\UserController@log_in');

Route::get('/register', 'admin\UserController@create');
Route::post('register', 'admin\UserController@store');

Route::get('/forgot', 'admin\UserController@forgot');
