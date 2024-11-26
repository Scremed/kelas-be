<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pertemuan1');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});
