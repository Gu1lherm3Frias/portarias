<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class,'index']);
Route::get('/create',  [IndexController::class, 'create']);
Route::post('/store', [IndexController::class, 'store']);
Route::get('/show', [IndexController::class, 'show']);
Route::get('/portarias/{portaria}/edit', [IndexController::class, 'edit']);
Route::post('/portarias/{portaria}', [IndexController::class, 'update']);
Route::delete('/portaria/{portaria}', [IndexController::class, 'destroy']);
