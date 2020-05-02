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


Route::get('create','UserController@create');
Route::get('index','UserController@index');
Route::get('email','emailController@email');

Route::get('send', 'emailController@sendNot');
