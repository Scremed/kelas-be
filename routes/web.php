<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::redirect('/', '/home');

Route::get('/home', [BookController::class, 'index']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/pertemuan3', function () {
    return view('pertemuan3');
});

Route::get('/create-book', [BookController::class, 'getCreatePage']);

Route::post('/create-book', [BookController::class, 'createBook']);

