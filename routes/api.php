<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NoteController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login',    [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/notes',          [NoteController::class, 'index']);
    Route::get('/notes/{id}',     [NoteController::class, 'show']);
    Route::post('/notes',         [NoteController::class, 'store']);
    Route::put('/notes/{id}',     [NoteController::class, 'update']);
    Route::delete('/notes/{id}',  [NoteController::class, 'destroy']);
});
