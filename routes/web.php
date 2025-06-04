<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\TeamworkController;
use App\Http\Controllers\Admin\MasrahiyatController;
use App\Http\Controllers\Admin\StatisticsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function () {
    return view('user.index');
})->name('home');

Route::get('about', function () {
    return view('user.about');
})->name('about');


Route::get('contact', function () {
    return view('user.contact');
})->name('contact');
Route::get('services', function () {
    return view('user.services');
})->name('services');



Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');












//                     // Admin Routes


Route::prefix('admin')->name('admin.')/* ->middleware(['auth']) */->group(function () {
    Route::resource('masrahiyat', MasrahiyatController::class);
     Route::resource('users', UserController::class)->names('users');
     Route::resource('teamwork', TeamworkController::class)->names('teamwork');
      Route::get('statistics', [StatisticsController::class, 'index'])->name('statistics.index');
    Route::get('statistics/{id}/edit', [StatisticsController::class, 'edit'])->name('statistics.edit');
    Route::put('statistics/{id}', [StatisticsController::class, 'update'])->name('statistics.update');
});
