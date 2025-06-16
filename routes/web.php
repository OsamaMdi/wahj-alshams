<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\TeamworkController;
use App\Http\Controllers\Admin\MasrahiyatController;
use App\Http\Controllers\Admin\StatisticsController;

// الصفحات العامة (بدون تسجيل دخول)
Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('/masrahiyat-home/page/{page}', [UserController::class, 'loadMasrahiyatPage']);
Route::get('/about', [UserController::class, 'about'])->name('about');
Route::get('contact', function () {
    return view('user.contact');
})->name('contact');
Route::get('/masrahiyat/{id}/details', [UserController::class, 'detailsMasrahiyat'])->name('masrahiyat.details');

// تسجيل الدخول للإدمن فقط
Route::get('/admin/login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AuthController::class, 'login']);
Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

// مسارات الإدمن (محمية)
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::resource('masrahiyat', MasrahiyatController::class);
    Route::resource('users', UserController::class)->names('users');
    Route::resource('teamwork', TeamworkController::class)->names('teamwork');
    Route::get('dashboard', [StatisticsController::class, 'index'])->name('dashboard.index');
    Route::get('statistics/{id}/edit', [StatisticsController::class, 'edit'])->name('statistics.edit');
    Route::put('statistics/{id}', [StatisticsController::class, 'update'])->name('statistics.update');

    // يمكنك إضافة المزيد من مسارات الإدمن هنا
});

Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');
