<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'FrontController@index');
Route::get('noticias', 'FrontController@noticias');
Route::get('login', 'FrontController@login');
Route::get('admin', 'FrontController@admin');
Route::resource('usuario', 'UsuarioController');