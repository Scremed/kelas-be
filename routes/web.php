<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;


Route::get('/about', function () {
    return view('about');
});

Route::get('/pertemuan3', function () {
    return view('pertemuan3');
});


Route::redirect('/', '/home');
// Get Method -> menampilkan data buku
Route::get('/home', [BookController::class, 'index'])->name('home');

Route::get('/create-book', [BookController::class, 'getCreatePage'])->name('createPage');
//Post Method -> membuat data buku
Route::post('/create-book', [BookController::class, 'createBook'])->name('createBook');

Route::get('/update-book/{id}', [BookController::class, 'getUpdatePage'])->name('updatePage');
//Update Method -> memperbarui data buku
Route::patch('/update-book/{id}', [BookController::class, 'updateBook'])->name('updateBook');

//Delete Method -> menghapus data buku
Route::delete('/delete-book/{id}', [BookController::class, 'deleteBook'])->name('deleteBook');


Route::get('/create-category', [BookController::class, 'categoryPage'])->name('categoryPage');
//Post Method -> membuat data category
Route::post('/create-category', [BookController::class, 'createCategory'])->name('createCategory');