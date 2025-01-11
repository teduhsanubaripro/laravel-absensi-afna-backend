<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/login', [App\Http\Controllers\Api\AuthController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Api\AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::post('/company', [App\Http\Controllers\Api\AuthController::class, 'index'])->middleware('auth:sanctum');
Route::post('/attendance', [App\Http\Controllers\Api\AuthController::class, 'index'])->middleware('auth:sanctum');
Route::post('/checkin', [App\Http\Controllers\Api\AuthController::class, 'checkin'])->middleware('auth:sanctum');
Route::post('/checkout', [App\Http\Controllers\Api\AuthController::class, 'checkout'])->middleware('auth:sanctum');
Route::post('/ischeckedin', [App\Http\Controllers\Api\AuthController::class, 'ischeckedin'])->middleware('auth:sanctum');
Route::post('/update-profile', [App\Http\Controllers\Api\AuthController::class, 'updateProfile'])->middleware('auth:sanctum');

