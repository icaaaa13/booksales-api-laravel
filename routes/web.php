<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/author', [AuthorController::class, 'index']);
Route::get('/books', [BookController::class, 'index']);