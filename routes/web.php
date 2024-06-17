<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customProfileController;
use App\Models\User;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $user = auth()->user(); // Corrected the authentication method
    return view('dashboard', compact('user'));
})->middleware(['auth', 'verified'])->name('dashboard');


//custom profile page done below on second route

Route::middleware('auth')->group(function () {
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

    Route::middleware('auth')->group(function () {

    Route::get('/profile', [customProfileController::class, 'show'])->name('profile.show');
    Route::get('/user/edit', [customProfileController::class, 'edit'])->name('user.edit');
    Route::put('/user/update', [customProfileController::class, 'update'])->name('user.update');
});

    Route::get('/color', [customProfileController::class, 'colors'])->name('color');
    Route::get('/cards', [customProfileController::class, 'cards'])->name('cards');
    Route::get('/border', [customProfileController::class, 'border'])->name('border');
    Route::get('/charts', [customProfileController::class, 'charts'])->name('charts');

require __DIR__.'/auth.php';
