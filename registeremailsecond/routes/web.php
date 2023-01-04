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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', 'App\Http\Controllers\IController@index');
Route::post('sign-submit', 'App\Http\Controllers\IController@sign_submit');
Route::get('/login', 'App\Http\Controllers\IController@login');
Route::post('login-submit', 'App\Http\Controllers\IController@login_submit');
Route::get('/display', 'App\Http\Controllers\IController@display_dashboard');
Route::get('/forgotpassword', 'App\Http\Controllers\IController@change_password');
Route::post('changepass-submit', 'App\Http\Controllers\IController@reset_submit');
Route::get('/newpassword', 'App\Http\Controllers\IController@display_newpassword');
Route::post('newpassword-submit', 'App\Http\Controllers\IController@update_password');

// 