<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\APIs\TaskController;
use App\Http\Controllers\APIs\UserRolesController;
use App\Http\Controllers\APIs\UserController;
use App\Http\Controllers\AuthController;


Route::middleware(['auth:sanctum'])->group(function () {
    // For User
    Route::apiResource('users', UserController::class); 
    Route::apiResource('user-roles', UserRolesController::class); 
    Route::apiResource('tasks', TaskController::class);  
});

Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout']);