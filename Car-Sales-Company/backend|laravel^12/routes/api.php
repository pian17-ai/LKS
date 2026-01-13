<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\InstallmentApplicationController;
use App\Http\Controllers\SocietyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ValidationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//user
Route::prefix('/v1/auth/user')->group(function () {
    Route::post('register', [UserController::class, 'register']);
    Route::post('login', [UserController::class, 'login']);
    Route::middleware('auth:sanctum')->post('logout', [UserController::class, 'logout']);
});

// society
Route::prefix('/v1/auth')->group(function () {
    Route::post('register', [SocietyController::class, 'register']);
    Route::post('login', [SocietyController::class, 'login']);
    Route::middleware('auth:sanctum')->post('logout', [SocietyController::class, 'logout']);
});

//validation
Route::prefix('/v1')->middleware('auth:sanctum')->group(function() {
    Route::post('/validations', [ValidationController::class, 'store']);
    Route::middleware('officer')->get('/validations', [ValidationController::class, 'index']);
});

//car
Route::prefix('/v1')->middleware('auth:sanctum')->group(function() {
    Route::get('/instalment_cars', [CarController::class, 'index']);
    Route::get('/instalment_cars/{car}', [CarController::class, 'show']);
}); 

//installment
Route::prefix('/v1')->middleware('auth:sanctum')->group(function() {
    Route::get('/applications', [InstallmentApplicationController::class, 'index']);
    Route::post('/applications', [InstallmentApplicationController::class, 'store']);
});