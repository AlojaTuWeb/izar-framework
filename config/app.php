<?php

use App\Providers\DatabaseServiceProvider;
use App\Providers\ViewServiceProvider;

return [
    'name' => env('APP_NAME', 'Izar-framework'),

    'providers' => [
        DatabaseServiceProvider::class,
        ViewServiceProvider::class,
    ],
    'aliases' => [
        'DB' => \Illuminate\Database\Capsule\Manager::class,
    ]
];