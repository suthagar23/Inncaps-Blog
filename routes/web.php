<?php

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

Route::get('/login', function () { return view('Login.login'); });
Route::get('/newuser', function () { return view('Login.new_user'); });
Route::post('/addnewuser', 'UserController@store');
Route::post('/checklogin', 'LoginController@checkLogin');