<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Public routes (guest only)
Route::controller(PageController::class)->middleware('guest')->group(function () {
    Route::get('/', 'welcome')->name('welcome');
    Route::get('services', 'services')->name('services');
    Route::get('about', 'about')->name('about');
    Route::get('contact', 'contact')->name('contact');
    Route::get('terms', 'terms')->name('terms');
    Route::get('privacy', 'privacy')->name('privacy');
});

// Registration route (guest only) with rate limiting
Route::middleware(['guest', 'throttle:register'])->group(function () {
    Route::post('/register', [AuthController::class, 'register'])->name('register');
});

// Authenticated routes
Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::view('video_converter', 'videos.convert')->name('video_converter');
});
