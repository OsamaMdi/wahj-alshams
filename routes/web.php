<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;

// Admin Controllers
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\Admin\TeamworkController;
use App\Http\Controllers\Admin\MasrahiyatController;
use App\Http\Controllers\Admin\StatisticsController;

/*
|--------------------------------------------------------------------------
| Public User Routes (No Login Required)
|--------------------------------------------------------------------------
*/

Route::get('/', [UserController::class, 'home'])->name('home');

Route::get('/masrahiyat-home/page/{page}', [UserController::class, 'loadMasrahiyatPage']);

Route::get('/about', [UserController::class, 'about'])->name('about');

Route::get('/contact', function () {
    return view('user.contact');
})->name('contact');

Route::get('/masrahiyat/{id}/details', [UserController::class, 'detailsMasrahiyat'])->name('masrahiyat.details');

/*
|--------------------------------------------------------------------------
| Admin Authentication Routes
|--------------------------------------------------------------------------
*/

Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

/*
|--------------------------------------------------------------------------
| Admin Panel Routes (Require Admin Role)
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {

    // Dashboard
    Route::get('dashboard', [StatisticsController::class, 'index'])->name('dashboard.index');

    // Masrahiyat CRUD
    Route::resource('masrahiyat', MasrahiyatController::class)->names('masrahiyat');

    // Users CRUD (using Admin controller)
    Route::resource('users', AdminUserController::class)->names('users');

    // Teamwork CRUD
    Route::resource('teamwork', TeamworkController::class)->names('teamwork');

    // Statistics Editing
    Route::get('statistics/{id}/edit', [StatisticsController::class, 'edit'])->name('statistics.edit');
    Route::put('statistics/{id}', [StatisticsController::class, 'update'])->name('statistics.update');

    // You can add more admin routes here...
});
