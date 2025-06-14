<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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


Route::get('/', [UserController::class, 'home'])->name('home');
Route::get('/masrahiyat-home/page/{page}', [UserController::class, 'loadMasrahiyatPage']);

Route::get('/about', [UserController::class, 'about'])->name('about');


Route::get('contact', function () {
    return view('user.contact');
})->name('contact');
Route::get('services', function () {
    return view('user.services');
})->name('services');



Route::get('/masrahiyat/{id}/details', [UserController::class, 'detailsMasrahiyat'])->name('masrahiyat.details');





//                     // Admin Routes


Route::prefix('admin')->name('admin.')/* ->middleware(['auth']) */->group(function () {
    Route::resource('masrahiyat', MasrahiyatController::class);
     Route::resource('users', UserController::class)->names('users');
     Route::resource('teamwork', TeamworkController::class)->names('teamwork');
      Route::get('dashboard', [StatisticsController::class, 'index'])->name('dashboard.index');
    Route::get('statistics/{id}/edit', [StatisticsController::class, 'edit'])->name('statistics.edit');
    Route::put('statistics/{id}', [StatisticsController::class, 'update'])->name('statistics.update');
});

