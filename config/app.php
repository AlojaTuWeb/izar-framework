<?php

use App\Providers\RouteServiceProvider;
use App\Providers\ViewServiceProvider;

return [
    'name' => env('APP_NAME', 'Izar-framework'),

    'providers' => [
        ViewServiceProvider::class,
        RouteServiceProvider::class,
    ]
];