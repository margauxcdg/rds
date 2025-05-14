<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\DashboardController;

Route::get('/', function () {
    return view('dashboard'); 
})->name('dashboard');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/admin-dashboard', [DashboardController::class, 'showDashboard'])
    ->middleware(['auth', 'verified'])
    ->name('admin-dashboard');

Route::get('/history', function () {
    return view('history');
})->middleware(['auth', 'verified'])->name('history');



Route::get('/my-requests', [RequestController::class, 'userRequest'])->name('user.requests');

Route::get('requests', [RequestController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('requests');

Route::post('/requests/store', [RequestController::class, 'store'])->name('requests.store');

Route::get('admin.requests', [RequestController::class, 'adminRequest'])->name('admin.requests');

Route::get('/request-details', function () {
    return view('admin.request-details'); 
})->middleware(['auth', 'verified'])->name('request-details');

Route::get('/request-details/{id}', [RequestController::class, 'show'])->name('request-details.show');

Route::post('/requests/{id}/accept', [RequestController::class, 'accept'])->name('requests.accept');

Route::post('/requests/{id}/complete', [RequestController::class, 'complete'])->name('requests.complete');
Route::post('/requests/{id}/decline', [RequestController::class, 'decline'])->name('requests.decline');
Route::post('/requests/{id}/cancel', [RequestController::class, 'cancel'])->name('requests.cancel');








Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';
