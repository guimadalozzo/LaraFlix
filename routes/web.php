<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('atores', 'AtoresController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
