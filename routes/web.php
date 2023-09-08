<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DraftController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
|
| These routes are accessible to everyone.
|
*/

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/profile/{username}', [ProfileController::class, 'visit'])->name('profile.visit');
Route::get('/project/{draft:slug}', [DraftController::class, 'show'])->name('draft.show');

/*
|---------------------------------------------------------------------------
| Only authenticated users can access the profile routes
|---------------------------------------------------------------------------
|
| The profile routes are only accessible to authenticated users.
|
*/
Route::middleware('auth')->group(function () {
    Route::resource('draft', DraftController::class)->except('show');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


/* Auth Routes (Login and Register) */
require __DIR__.'/auth.php';
