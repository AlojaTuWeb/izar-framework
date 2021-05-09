<?php

use App\Providers\ErrorMiddlewareServiceProvider;
use App\Providers\RouteServiceProvider;
use App\Providers\ViewServiceProvider;

return [
    'providers' => [
        ViewServiceProvider::class,
        RouteServiceProvider::class,
        ErrorMiddlewareServiceProvider::class,
    ]
];