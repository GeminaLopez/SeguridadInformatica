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

Route::get('/', 'HomeController@index');

// Corredores
Route::get('/corredores', 'CorredorController@index');
Route::get('/corredor/nuevo', 'CorredorController@formNuevo');
Route::post('/corredor/nuevo', 'CorredorController@crear');
