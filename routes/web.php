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

Route::get('/', 'GeininController@index');
Route::get('show/{id}', 'GeininController@show');
Route::get('geinin/create', 'GeininController@create');
Route::post('geinin/create', 'GeininController@store');
Route::get('video/create', 'VideoController@create');
Route::post('video/create', 'VideoController@store');