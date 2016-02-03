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
|
|
|Route::get('/', 'WelcomeController@index');
|
|Route::get('home', 'HomeController@index');
*/

Route::get('/', 'MasterController@index');

Route::get('home', 'MasterController@index');

Route::get('rooms', 'MasterController@rooms');

Route::get('quarter', 'MasterController@affordable');

Route::get('middlequarter', 'MasterController@middleclass');

Route::get('vip', 'MasterController@vip');

Route::get('dashboard', 'MasterController@dashboard');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
