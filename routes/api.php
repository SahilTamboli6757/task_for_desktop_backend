<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::post('login', [AuthController::class, 'login']);

Route::post('signup', [AuthController::class, 'signup']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::resource('tasks',TaskController::class);
});



