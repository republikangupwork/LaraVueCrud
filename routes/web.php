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
    return redirect('home');
});

Route::get('/home', 'CrudController@index');
Route::get('/create', 'CrudController@create');
Route::post('/store', 'CrudController@store');
Route::get('/show', 'CrudController@show');
Route::get('/edit', 'CrudController@edit');
Route::post('/update', 'CrudController@update');