<?php

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

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/profile/{username}', [ProfileController::class, 'visit'])->name('profile.visit');

/*
|---------------------------------------------------------------------------
| Only authenticated users can access the profile routes
|---------------------------------------------------------------------------
|
| The profile routes are only accessible to authenticated users.
|
*/
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
