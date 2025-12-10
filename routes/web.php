<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::controller(PageController::class)->group(function () {

    Route::get('/', 'welcome')->name('Welcome');

    Route::get('services', 'services')->name('Services');

    Route::get('about', 'about')->name('About');

    Route::get('contact', 'contact')->name('Contact');

    Route::get('terms', 'terms')->name('Terms');

    Route::get('privacy', 'privacy')->name('Privacy');
});

Route::middleware(['auth'])->controller(AuthController::class)->group(function () {

    Route::get('dashboard', 'dashboard')->name('Dashboard');
});
