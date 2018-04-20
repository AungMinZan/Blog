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

// User route
Route::get('/login', 'Auth\UserLoginController@showLoginForm')->name('users.login.form');
Route::post('/login', 'Auth\UserLoginController@login')->name('users.login');

Route::get('/home', 'User\HomeController@index')->name('home');

Route::resource('/posts', 'User\PostController', ['except' => ['index', 'show']]);

Route::resource('/users', 'User\UserController', ['except' => ['index']]);

Route::post('/logout', 'Auth\UserLoginController@logout')->name('users.logout');
