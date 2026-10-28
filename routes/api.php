<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GenreController;
use App\Http\Controllers\Api\AuthorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// Routes Genre
Route::get('/genres', [GenreController::class, 'index']);
Route::post('/genres', [GenreController::class, 'store']);

// Routes Author
Route::get('/authors', [AuthorController::class, 'index']);
Route::post('/authors', [AuthorController::class, 'store']);