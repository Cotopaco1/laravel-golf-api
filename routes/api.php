<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1')->group(function(){


    Route::middleware('auth:sanctum')->group(function(){
        Route::apiResource('listings', \App\Http\Controllers\v1\ListingController::class);
    });

    Route::middleware('guest')->group(function(){
       Route::post('login', [\App\Http\Controllers\v1\AuthenticationController::class, 'login']);
    });

    /*LISTING VIEW*/

});
