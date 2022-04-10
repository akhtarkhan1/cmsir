<?php

use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\User\AccountController;
use App\Http\Controllers\Frontend\User\DashboardController;
use App\Http\Controllers\Frontend\User\ProfileController;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('contact', [ContactController::class, 'index'])->name('contact');
Route::post('contact/send', [ContactController::class, 'send'])->name('contact.send');

Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('crew-schedule', [HomeController::class, 'crewSchedule'])->name('crew-schedule');
Route::get('crew-status', [HomeController::class, 'crewStatus'])->name('crew-status');
Route::get('training', [HomeController::class, 'training'])->name('training');
Route::get('vacation', [HomeController::class, 'vacation'])->name('vacation');
Route::get('medical', [HomeController::class, 'medical'])->name('medical');
Route::get('photo-gallery', [HomeController::class, 'photoGallery'])->name('photoGallery');
Route::get('medical', [HomeController::class, 'medical'])->name('medical');
Route::get('medical', [HomeController::class, 'medical'])->name('medical');
Route::get('medical', [HomeController::class, 'medical'])->name('medical');
Route::get('medical', [HomeController::class, 'medical'])->name('medical');



/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        // User Dashboard Specific
        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

        // User Account Specific
        Route::get('account', [AccountController::class, 'index'])->name('account');

        // User Profile Specific
        Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');
    });
});
