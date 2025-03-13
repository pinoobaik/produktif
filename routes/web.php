<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\ManagementUserController;

// Route dasar
Route::get('/', function () {
    return view('welcome');
});

// Pastikan Controller dipanggil dengan benar

// Route::group(['namespace'=>'Frontend'], function()
// {
//     Route::resource('home', 'HomeController');
// });

// Route::group(['namespace'=>'Backend'], function()
// {
//     Route::resource('dashboard', 'DashboardController');
// }); laravel 8 keatas tidak mendukung sintaks ini

// Rute untuk HomeController
Route::resource('home', HomeController::class);

// Rute untuk DashboardController
Route::resource('dashboard', DashboardController::class);

// Rute untuk ManagementUserController
Route::resource('/user', ManagementUserController::class);


// Route::get('/users', [ManagementUserController::class, 'index']);
// Route::get('/users/create', [ManagementUserController::class, 'create']);
// Route::post('/users', [ManagementUserController::class, 'store']);
// Route::get('/users/{id}', [ManagementUserController::class, 'show']);
// Route::get('/users/{id}/edit', [ManagementUserController::class, 'edit']);
// Route::put('/users/{id}', [ManagementUserController::class, 'update']);
// Route::delete('/users/{id}', [ManagementUserController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
