<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\ListingController;
use App\Http\Controllers\v1\AuthenticationController;

Route::prefix('v1')->group(function(){

    Route::middleware('auth:sanctum')->group(function(){
        Route::apiResource('listings', ListingController::class);
    });

    Route::middleware(['guest', 'throttle:login'])->group(function(){
       Route::post('login', [AuthenticationController::class, 'login'])->name('login');
    });

});
