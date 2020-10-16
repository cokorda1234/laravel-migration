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
Route::prefix('pertanyaan')->group(function (){
    Route::get('create', 'PertanyaanController@create');
    Route::get('/','PertanyaanController@index');
    Route::post('/','PertanyaanController@store');
    Route::get('/{id}/','PertanyaanController@show');
    Route::get('{id}/edit','PertanyaanController@edit');
    Route::put('/{id}','PertanyaanController@update');
    Route::delete('/{id}','PertanyaanController@delete');
});



