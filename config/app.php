<?php

use App\Providers\DatabaseServiceProvider;
use App\Providers\ViewServiceProvider;
use App\Support\Auth;
use Illuminate\Database\Capsule\Manager;

return [
    'name' => env('APP_NAME', 'Izar-framework'),

    'providers' => [
        DatabaseServiceProvider::class,
        ViewServiceProvider::class,
    ],
    'aliases' => [
        'Auth' => Auth::class,
        'DB' => Manager::class,
    ]
];