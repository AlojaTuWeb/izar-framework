<?php

use App\Http\Controllers\ApiController;
use App\Support\Route;

Route::get('/', [ApiController::class, 'index']);