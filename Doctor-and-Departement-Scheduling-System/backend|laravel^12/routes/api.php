<?php

use App\Http\Controllers\DepartementController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//auth
Route::prefix('/v1/auth')->group(function() {
    Route::post('/register', [UserController::class, 'register']);
    Route::post('/login', [UserController::class, 'login']);
    Route::middleware('auth:sanctum')->post('/logout', [UserController::class, 'logout']);
});

//departement
Route::prefix('/v1')->middleware('auth:sanctum', 'admin')->group(function() {
    Route::get('/departement', [DepartementController::class, 'index']);
    Route::post('/departement', [DepartementController::class, 'store']);
    Route::put('/departement/{id}', [DepartementController::class, 'update']);
    Route::delete('/departement/{id}', [DepartementController::class, 'delete']);
});

// doctor
Route::prefix('/v1')->middleware('auth:sanctum', 'admin')->group(function() {
    Route::get('/doctor', [DoctorController::class, 'index']);
    Route::post('/doctor', [DoctorController::class, 'store']);
    Route::put('/doctor/{id}', [DoctorController::class, 'update']);
    Route::delete('/doctor/{id}', [DoctorController::class, 'destroy']);
});