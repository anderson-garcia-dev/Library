<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Books
Route::resource('books', BookController::class)->parameters(['book' => 'book'])->names('books');

//Categories
Route::resource('categories', CategoryController::class)->parameters(['category' => 'category'])->names('categories');
