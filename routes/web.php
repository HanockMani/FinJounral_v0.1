<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::middleware(['auth', 'verified'])->group(function() {
    Route::prefix('admin')->middleware('role:admin')->group( function() {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    });

    Route::prefix('user')->middleware('role:user')->group(function() {
        Route::get('/dashboard', function() {
            return view('user.dashboard');
        })->name('user.dashboard');
    });
});

require __DIR__.'/auth.php';
