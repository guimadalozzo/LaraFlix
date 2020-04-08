<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('atores', 'AtoresController@index');
Route::get('atores/create', 'AtoresController@create');
Route::post('atores/store', 'AtoresController@store');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
