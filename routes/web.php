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

Route::get('/', function () {
    return view('welcome');
});

Route::post('/add', 'PruebaController@add');
Route::get('/get', 'PruebaController@get');
Route::post('/delete', 'PruebaController@delete');
Route::post('/getone', 'PruebaController@getone');
