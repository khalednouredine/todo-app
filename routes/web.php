<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Accueil');
});
Route::get('/publications', function () {
    return view('Publications');
});
