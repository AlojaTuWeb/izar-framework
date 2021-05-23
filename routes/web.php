<?php

use App\Http\Controllers\HomeController;
use App\Support\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/tests', [HomeController::class, 'show']);
