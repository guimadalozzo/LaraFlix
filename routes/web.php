<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('atores', 'AtoresController@index');
Route::get('atores/create', 'AtoresController@create');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
