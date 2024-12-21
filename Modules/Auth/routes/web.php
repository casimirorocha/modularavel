<?php

use Illuminate\Support\Facades\Route;
use Modules\Auth\Http\Controllers\AuthenticatedSessionController;
use Modules\Auth\Http\Controllers\ConfirmablePasswordController;
use Modules\Auth\Http\Controllers\EmailVerificationNotificationController;
use Modules\Auth\Http\Controllers\EmailVerificationPromptController;
use Modules\Auth\Http\Controllers\PasswordController;
use Modules\Auth\Http\Controllers\PasswordResetLinkController;
use Modules\Auth\Http\Controllers\RegisteredUserController;
use Modules\Auth\Http\Controllers\VerifyEmailController;

Route::get('testexample', function () {

    dd(config('auth.name'));
});

// Routes with auth prefix
Route::middleware('web')->group(function () {

    // Guest Middleware
    Route::middleware('guest')->group(function () {
        // Login Routes...
        Route::controller(AuthenticatedSessionController::class)->group(function () {
            Route::get('login', 'create')->name('login');
            Route::post('login', 'store');
        });

        // Forgot Password Routes...
        Route::controller(PasswordResetLinkController::class)->group(function () {
            Route::get('forgot-password', 'create')->name('password.request');
            Route::post('forgot-password', 'store')->name('password.email');
        });

        // Password Reset Routes...
        Route::controller(PasswordController::class)->group(function () {
            Route::get('reset-password/{token}', 'create')->name('password.reset');
            Route::post('reset-password', 'store')->name('password.store');
        });

        // Registration Routes...
        Route::controller(RegisteredUserController::class)->group(function () {
            Route::get('register', 'create')->name('register');
            Route::post('register', 'store');
        });

        // Confirm Password Routes...
        Route::controller(ConfirmablePasswordController::class)->group(function () {
            Route::get('confirm-password', 'show')->name('password.confirm');
            Route::post('confirm-password', 'store');
        });
    });

    // Authenticated Middleware
    Route::middleware('auth')->group(function () {

        // Routes group for middleware throttle:6,1
        Route::middleware(['throttle:6,1'])->group(function () {
            // Email Verification Confirmation Route...
            Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)->middleware(['signed'])->name('verification.verify');

            // Email Verification Notification Route...
            Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])->name('verification.send');
        });

        // Email Verification Prompt Route...
        Route::get('verify-email', EmailVerificationPromptController::class)->name('verification.notice');

        // Update Password Route...
        Route::put('password', [PasswordController::class, 'update'])->name('password.update');

        // Logout Route...
        Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
    });
});
