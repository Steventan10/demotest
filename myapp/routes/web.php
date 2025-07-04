<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', fn() => redirect('/login'));
Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'doLogin']);
Route::get('/dashboard', [DashboardController::class, 'index']);
Route::post('/submit', [DashboardController::class, 'submit']);
