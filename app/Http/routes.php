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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::get('unidad', 'UnidadController@index');
Route::get('falla', 'FallaController@registrarfalla');
//Route::get('operador', 'OperadorController@index');
Route::get('operador', 'OperadorController@index');


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

//Route::post('login','LoginController@loginPostAdmin');

//resource('operadores','OperadorController');
resource('unidades','UnidadController');
resource('fallas','FallaController');

/*Vistas De Fallas*/
Route::get('rfalla','FallaController@registrarfalla');
Route::get('rcfalla','FallaController@registrarcategoriafalla');
Route::get('rfuoperador','FallaController@registrarfallaunidadoperador');
Route::get('rtfalla','FallaController@registrartipofalla');
