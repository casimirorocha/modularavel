<?php

use Illuminate\Support\Facades\Route;
use Modules\Spotlight\Http\Controllers\SpotlightController;

/*
 *--------------------------------------------------------------------------
 * API Routes
 *--------------------------------------------------------------------------
 *
 * Here is where you can register API routes for your application. These
 * routes are loaded by the RouteServiceProvider within a group which
 * is assigned the "api" middleware group. Enjoy building your API!
 *
*/

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::apiResource('spotlight', SpotlightController::class)->names('spotlight');
});
