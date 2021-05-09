<?php

use App\Http\Controllers\HomeController;
use App\Support\Route;

Route::get('/api/{name}/{id}', [HomeController::class, 'show']);