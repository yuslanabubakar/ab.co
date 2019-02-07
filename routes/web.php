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
Route::get('/seller/addProduct','ProductController@viewAddProduct');
Route::get('/', 'HomeController@index');

//Login & Register
Route::get('/login', 'UserController@loginView');
Route::get('/register', 'UserController@registerView');
Route::post('/register/add', 'UserController@register');
Route::post('/login/login', 'UserController@login');
Route::get('/logout', 'UserController@logout');