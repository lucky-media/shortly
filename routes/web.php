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

Route::get('/', 'HomeController');

// Links Routes
Route::post('/link', 'LinksController@store')->name('link.store');
Route::get('/{link}', 'LinksController@view');
Route::get('/{link}/stats', 'LinksController@show');
