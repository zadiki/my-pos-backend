<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('login', [\App\Http\Controllers\Api\AuthController::class, 'login']);

Route::middleware([\App\Http\Middleware\JwtAuth::class])->group(function () {
    Route::post('logout', [\App\Http\Controllers\Api\AuthController::class, 'logout']);
    Route::post('refresh', [\App\Http\Controllers\Api\AuthController::class, 'refresh']);
    Route::get('me', [\App\Http\Controllers\Api\AuthController::class, 'me']);
    Route::apiResource('users', \App\Http\Controllers\Api\UserController::class);
});

