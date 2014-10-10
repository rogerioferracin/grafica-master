<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', array('uses'=>'GraficaController@getIndex'));

Route::resource('usuarios', 'UsersController');
Route::get('usuario/{id}/change-pass', ['as'=>'users.changePassView','uses'=>'UsersController@changePassView']);
Route::post('usuario/change-pass', ['as'=>'users.changePass','uses'=>'UsersController@changePass']);
Route::get('usuario/login', ['as'=>'users.login','uses'=>'UsersController@showLogin']);
Route::post('usuario/login', ['as'=>'users.login','uses'=>'UsersController@doLogin']);
