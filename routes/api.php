<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/projects', [App\Http\Controllers\Admin\ProjectController::class, 'index']);
Route::get('/projects/{id}', [App\Http\Controllers\Admin\ProjectController::class, 'show']);


