<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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


Route::get('/tentang', function () {
    return view('tentang');
});

Route::get('/resep', function () {
    return view('resep');
});

Route::get('/', function () {
    return view('landingpage');
});



Route::get('/landingpage', function () {
    return view('landingpage');
})->middleware(['auth', 'verified'])->name('landingpage');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::middleware([CheckRole::class . ':user'])->group(function () {

    });

    Route::middleware([CheckRole::class . ':admin'])->group(function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    });
});


require __DIR__.'/auth.php';
