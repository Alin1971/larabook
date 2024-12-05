<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('books', [BookController::class,'index'])->name('books.index');
Route::get('books/{id}/show', [BookController::class,'show'])->name('books.show');
Route::get('books/create', [BookController::class,'create'])->name('books.create');
