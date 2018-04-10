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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'Auth\UserLoginController@showLoginForm')->name('users.login.form');
Route::post('/login', 'Auth\UserLoginController@login')->name('users.login');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/logout', 'Auth\UserLoginController@logout')->name('users.logout');
