<?php

use App\Http\Controllers\InstallmentApplySocietyController;
use App\Http\Controllers\InstallmentController;
use App\Http\Controllers\SocietyController;
use App\Http\Controllers\ValidationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//A1a - A1d
Route::prefix('/v1/auth')->group(function() {
    Route::post('/register', [SocietyController::class, 'register']);
    Route::post('/login', [SocietyController::class, 'login']);
    Route::middleware('auth:sanctum')->post('/logout', [SocietyController::class, 'logout']);
});

//A2a - A2d
Route::middleware('auth:sanctum')->prefix('/v1')->group(function() {
    Route::post('/validation', [ValidationController::class, 'store']);
    Route::get('/validations', [ValidationController::class, 'index']);
});

//A3a - A3b
Route::middleware('auth:sanctum')->prefix('/v1')->group(function() {
    Route::get('/instalment_cars', [InstallmentController::class, 'index']);
    Route::get('/instalment_cars/{installment}', [InstallmentController::class, 'show']);
});

// A4a - A4g
Route::middleware('auth:sanctum')->prefix('/v1')->group(function() {
    Route::post('/applications', [InstallmentApplySocietyController::class, 'store']);
    Route::get('/applications', [InstallmentApplySocietyController::class, 'index']);
});