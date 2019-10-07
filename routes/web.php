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
    return redirect('crud/dashboard');
});


Route::group(['prefix'=>'crud'], function () {
	Route::get('/', function () {
	    return redirect('crud/dashboard');
	});
    Route::get('/dashboard', 'CrudController@index');
    Route::get('/create', 'CrudController@create');
    // Route::post('/store', 'CrudController@store');
});
