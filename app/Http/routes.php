<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/','FromController@index');
Route::get('contactos','FromController@contactos');
Route::get('reviews','FromController@reviews');

Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::resource('usuario','UsuarioController');

Route::resource('genero','GeneroController');

Route::resource('pelicula','MovieController');

Route::resource('mail','MailController');

Route::get('generos','GeneroController@listing');

Route::resource('log','LogController');

Route::get('logout','LogController@logout');