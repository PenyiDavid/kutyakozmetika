<?php

use App\Http\Controllers\FoglalasController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/foglalasok', [FoglalasController::class, 'index'])->middleware('auth')->name('foglalasok.index');
Route::get('/foglalasok/show/{id}', [FoglalasController::class, 'show'])->middleware(AdminMiddleware::class)->name('foglalasok.show');
require __DIR__.'/auth.php';
