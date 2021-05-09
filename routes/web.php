<?php

use App\Http\Controllers\HomeController;
use App\Support\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/dashboard', [HomeController::class, 'show']);
