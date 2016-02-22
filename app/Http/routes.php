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

/**
 * Home routes
 */
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');

/**
 * Admin routes
 */
Route::get('admin/dashboard', 'AdminController@index');

/**
 * Room routes
 */
Route::get('rooms', 'RoomsController@index');
Route::get('rooms/page/{pageName}', 'RoomsController@page');

/**
 * Requests routes
 */
Route::get('requests/create', 'RequestController@create');

Route::post('requests/create', 'RequestController@store');

Route::get('tosendtwo', 'MasterController@tosend_two');

Route::controllers([
  'auth'     => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);
