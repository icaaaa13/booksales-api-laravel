<?php 

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TransactionController;
use App\Http\Controllers\Api\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/

// Route untuk Login (Mendapatkan Token JWT)
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Route untuk Customer yang sudah terautentikasi (Create, Update, Show)
Route::middleware(['auth:api'])->group(function () {
    Route::post('/transactions', [TransactionController::class, 'store']);    // Create
    Route::put('/transactions/{id}', [TransactionController::class, 'update']); // Update
    Route::get('/transactions/{id}', [TransactionController::class, 'show']);   // Show detail
});

// Route khusus Admin (Read All & Destroy)
Route::middleware(['auth:api', 'admin'])->group(function () {
    Route::get('/transactions', [TransactionController::class, 'index']);      // Read All
    Route::delete('/transactions/{id}', [TransactionController::class, 'destroy']); // Destroy
});