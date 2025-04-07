<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TranslateController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::post('login', [AuthController::class, 'login']);

Route::post('signup', [AuthController::class, 'signup']);

Route::apiResource('translate',TranslateController::class);

Route::middleware(['auth:api'])->group(function () {

    Route::get('logout', [AuthController::class, 'logout']);

    Route::get('profile', [AuthController::class, 'showProfile']);

    Route::put('profile/update', [AuthController::class, 'updateProfile']);

    Route::resource('tasks', TaskController::class);
});
