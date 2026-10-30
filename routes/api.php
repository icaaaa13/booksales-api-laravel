<?php  
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\GenreController;
use App\Http\Controllers\Api\AuthorController;


Route::apiResource('genres', GenreController::class);
Route::apiResource('authors', AuthorController::class);