<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');


Route::post('registration', [UserController::class, 'registration']);
Route::post('auth', [UserController::class, 'auth']);
Route::get('room', [RoomController::class, 'index']);
Route::middleware('auth:sanctum')->group(function () {
    Route::resource('room', RoomController::class)->except(['index']);
    Route::resource('order', OrderController::class);
});
