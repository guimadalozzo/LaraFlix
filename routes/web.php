<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('atores', function () {
    return "Olá!" .
    		"<br>Esta é a rota de listagem de atores.";
});
