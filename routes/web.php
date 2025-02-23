<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


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

Route::get('/requests', function () {
    return view('admin.admin-requests'); 
})->middleware(['auth', 'verified'])->name('requests');

Route::get('/requests-details', function () {
    return view('admin.request-details'); 
})->middleware(['auth', 'verified'])->name('request-details');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
