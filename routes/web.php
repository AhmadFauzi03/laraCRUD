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

Route::resource('buku','VellController');
Route::get('/','VellController@home');
Route::post('/buku/create','VellController@store');
Route::get('/view/{id}','VellController@view');
Route::group(['middleware' => ['auth']], function(){
	Route::get('/home','HomeControllere@index');
});
Auth::routes();

Route::get('/home', 'HomeController@index');
