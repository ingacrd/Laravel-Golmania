<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FixtureController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/fixtures', [FixtureController::class, 'index']);
Route::post('/fixtures',[FixtureController::class, 'store']);
Route::get('/fixtures/{fixture}', [FixtureController::class, 'show']);
Route::put('/fixtures/{fixture}', [FixtureController::class, 'update']);
Route::delete('/fixtures/{fixture}',[FixtureController::class, 'destroy']);