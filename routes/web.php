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

Route::view('/', 'welcome');
Route::view('/prueba', 'savejobintro')->middleware('guest', 'guest:admin');

Auth::routes();

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->middleware('redirectSuperAdmin')->name('adminlogin');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm')->middleware('auth:admin','checkSuperAdmin:admin');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin')->middleware('auth:admin');;

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/user/menu', 'user.user_menu');
