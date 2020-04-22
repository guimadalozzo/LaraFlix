<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'atores', 'where'=>['id'=>'[0-9]+']], function() {
    Route::get('',             ['as'=>'atores',         'uses'=>'AtoresController@index'  ]);
    Route::get('create',       ['as'=>'atores.create',  'uses'=>'AtoresController@create' ]);
    Route::get('{id}/destroy', ['as'=>'atores.destroy', 'uses'=>'AtoresController@destroy']);
    Route::get('{id}/edit',    ['as'=>'atores.edit',    'uses'=>'AtoresController@edit'   ]);
    Route::put('{id}/update',  ['as'=>'atores.update',  'uses'=>'AtoresController@update' ]);
    Route::post('store',       ['as'=>'atores.store',   'uses'=>'AtoresController@store'  ]);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
