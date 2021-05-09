<?php

use App\Http\Controllers\HomeController;
use App\Support\Route;

Route::get('/{name}', [HomeController::class, 'index']);
Route::get('/dashboard/{name}/{id}', [HomeController::class, 'show']);
