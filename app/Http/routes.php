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
Route::get('admin/dashboard/confirmed', 'AdminController@confirmed');
Route::get('admin/dashboard/cancelled', 'AdminController@cancelled');

/**
 * Room routes
 */
Route::get('rooms', 'RoomsController@index');
Route::get('rooms/page/{pageName}', 'RoomsController@page');

/**
 * Requests routes
 */
Route::get('reservations/create', 'ReservationController@create');

Route::post('reservations', 'ReservationController@store');
//confirmation route
Route::get('reservation/confirm/{id}', 'ReservationController@confirm')->where('id', '[0-9]+');
//cancelled route
Route::get('reservation/cancelled/{id}', 'ReservationController@cancelled')->where('id', '[0-9]+');

Route::get('tosendtwo', 'MasterController@tosend_two');

Route::get('check', 'RoomsController@checkAvailability');

Route::controllers([
  'auth'     => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);
