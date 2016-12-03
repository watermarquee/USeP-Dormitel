<?php
use Illuminate\Support\Facades\Mail;

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
Route::get('admin/dashboard/finished', 'AdminController@finished');
Route::get('admin/dashboard/export', 'AdminController@getExcelFile');
Route::get('admin/dashboard/download', 'ReservationController@download');
Route::get('admin/dashboard/register', 'AdminController@register');
Route::post('admin/dashboard/register', 'AdminController@postRegister');
Route::get('admin/dashboard/admins', 'AdminController@admins');
Route::delete('admin/dashboard/admins/{id}', [
	'as' => 'admin.delete',
	'uses' => 'AdminController@destroy']);
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
//finished route
Route::get('reservation/finished/{id}', 'ReservationController@finished')->where('id', '[0-9]+');
//get startDate; endDate;
Route::post('check', 'RoomsController@checkAvailability');
//summary
Route::get('admin/dashboard/summary', 'ReservationController@summary');
Route::get('admin/dashboard/excel', 'AdminController@excel');

Route::controllers([
  'auth'     => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);
