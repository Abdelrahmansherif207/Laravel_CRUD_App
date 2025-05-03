<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\PostApiController;
use App\Http\Controllers\API\AuthApiController;



Route::post('/register', [AuthApiController::class, 'register']);
Route::post('/login', [AuthApiController::class, 'login']);

Route::middleware(['auth:sanctum'])->group(function () {
    Route::apiResource('posts', PostApiController::class);
});