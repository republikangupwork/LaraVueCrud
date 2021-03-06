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
    Route::post('/store', 'CrudController@store');

    Route::get('/show/{id}', 'CrudController@show');
    Route::get('/edit/{id}', 'CrudController@edit');
    Route::post('/update/', 'CrudController@update');
    Route::delete('/delete/{id}', 'CrudController@delete');
    Route::post('/get_data', 'CrudController@get_data_for_display');
    Route::post('/get_single/{id}', 'CrudController@get_single_data');
    Route::get('/export/{id}', 'CrudController@export');

});

// Route::get('/export', function(){
// 	$pdf = App::make('dompdf.wrapper');
// 	// $pdf->loadHTML('<h1>Test</h1>');
// 	// return $pdf->stream();
//     	  	$pdf = PDF::loadView('crud/create');
//         	return $pdf->download('create.pdf');
//     });
