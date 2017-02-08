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

Route::get('/dvds/search','SearchController@index');
Route::get('/dvds', 'SearchController@results');
Route::get('/', 'SearchController@redirect');
