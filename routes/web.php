<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\MasrahiyatController;

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


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');












//                     // Admin Routes


Route::prefix('admin')->name('admin.')/* ->middleware(['auth']) */->group(function () {
    Route::resource('masrahiyat', MasrahiyatController::class);

});
