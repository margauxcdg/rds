<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestController;

Route::get('/', function () {
    return view('dashboard'); 
})->name('dashboard');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin-dashboard', function () {
    return view('admin.admin-dashboard');
})->middleware(['auth', 'verified'])->name('admin-dashboard');

Route::get('/history', function () {
    return view('history');
})->middleware(['auth', 'verified'])->name('history');

Route::get('/my-requests', [RequestController::class, 'userRequest'])->name('user.requests');

Route::get('requests', [RequestController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('requests');

Route::post('/requests/store', [RequestController::class, 'store'])->name('requests.store');


Route::get('/request-details', function () {
    return view('admin.request-details'); 
})->middleware(['auth', 'verified'])->name('request-details');

Route::get('/request-details/{id}', [RequestController::class, 'show'])->name('request-details.show');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
