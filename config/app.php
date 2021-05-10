<?php

use App\Providers\EnvironmentVariablesServiceProvider;
use App\Providers\ErrorMiddlewareServiceProvider;
use App\Providers\RouteServiceProvider;
use App\Providers\ViewServiceProvider;

return [
    'name' => env('APP_NAME', 'Izar-framework and CMS'),

    'providers' => [
        ViewServiceProvider::class,
        RouteServiceProvider::class,
        ErrorMiddlewareServiceProvider::class,
        EnvironmentVariablesServiceProvider::class
    ]
];