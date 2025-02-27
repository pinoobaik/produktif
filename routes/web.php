<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManagementUserController; // Pastikan mengimpor controller

// Route dasar
Route::get('/', function () {
    return view('welcome');
});

Route::resource('/user', ManagementUserController::class);

// Route::get('/users', [ManagementUserController::class, 'index']);
// Route::get('/users/create', [ManagementUserController::class, 'create']);
// Route::post('/users', [ManagementUserController::class, 'store']);
// Route::get('/users/{id}', [ManagementUserController::class, 'show']);
// Route::get('/users/{id}/edit', [ManagementUserController::class, 'edit']);
// Route::put('/users/{id}', [ManagementUserController::class, 'update']);
// Route::delete('/users/{id}', [ManagementUserController::class, 'destroy']);

Route::get('/home', [ManagementUserController::class, 'index']);

