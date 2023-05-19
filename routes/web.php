<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManageUserController;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\SaranController;
use App\Http\Controllers\DatabaseDumpController;

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

Route::get('/database/dump', [DatabaseDumpController::class, 'createDump']);

Route::get('/landingpage', function () {
    return view('landingpage');
})->middleware(['auth', 'verified'])->name('landingpage');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/resep', [ResepController::class, 'index1'])->name('resep');
    Route::get('/saran', [KritiksaranController::class, 'index'])->name('saran');
    Route::post('/simpan-saran', [SaranController::class, 'store'])->name('simpan-saran');
    Route::middleware([CheckRole::class . ':user'])->group(function () {

    });

    Route::middleware('checkRole:admin')->group(function (){
        Route::get('/admin',[AdminController::class, 'index'])->name('admin');
        Route::get('/manage-user', [ManageUserController::class, 'index'])->name('manage-user');
        Route::get('/create-user', [ManageUserController::class, 'create'])->name('create-user');
        Route::post('/simpan-user', [ManageUserController::class, 'store'])->name('simpan-user');
        Route::get('/data/{id}/edit', [ManageUserController::class, 'edit'])->name('edit');
        Route::get('/tampilkanDataUser/{id}',[ ManageUserController::class,'edit'] )->name('tampilkanDataUser');
        Route::post('/tampilkanDataUser/{id}',[ ManageUserController::class,'update'] )->name('datauser.update');

        Route::get('/deleteDataUser/{id}', [ManageUserController::class, 'delete'])->name('deleteDataUser');


        Route::get('/kelola-resep', [ResepController::class, 'index'])->name('kelola-resep');
        Route::get('/create-resep', [ResepController::class, 'create'])->name('create-resep');
        Route::post('/simpan-resep', [ResepController::class, 'store'])->name('simpan-resep');
        Route::get('/deleteResep/{id}', [ResepController::class, 'delete'])->name('deleteResep');
        Route::get('/hasil/{id}', [ResepController::class, 'index1'])->name('hasil');

        Route::get('/kelola-saran', [SaranController::class, 'index'])->name('kelola-saran');
        

    });
});


require __DIR__.'/auth.php';
