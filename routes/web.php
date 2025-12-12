<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::controller(PageController::class)->middleware('guest')->group(function () {

    Route::get('/', 'welcome')->name('welcome');

    Route::get('services', 'services')->name('services');

    Route::get('about', 'about')->name('about');

    Route::get('contact', 'contact')->name('contact');

    Route::get('terms', 'terms')->name('terms');

    Route::get('privacy', 'privacy')->name('privacy');
});

Route::middleware(['auth'])->controller(AuthController::class)->group(function () {

    Route::get('dashboard', 'dashboard')->name('dashboard');

    Route::post('/register', 'register')
        ->middleware(['guest'])
        ->name('register');
});
