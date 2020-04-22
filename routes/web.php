<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('atores', 'AtoresController@index');
Route::get('atores/create', 'AtoresController@create');
Route::post('atores/store', 'AtoresController@store');
Route::get('atores/{id}/destroy', 'AtoresController@destroy');
Route::get('atores/{id}/edit', 'AtoresController@edit');
Route::put('atores/{id}/update', 'AtoresController@update');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
