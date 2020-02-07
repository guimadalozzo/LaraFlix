<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('atores', 'AtoresController@index');

