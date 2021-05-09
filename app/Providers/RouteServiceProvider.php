<?php

namespace App\Providers;

use App\Support\Route;

/**
 * Class RouteServiceProvider
 * @package App\Providers
 */
class RouteServiceProvider extends ServiceProvider
{

    /**
     *
     */
    public function register()
    {
        Route::setup($this->app);
    }

    /**
     *
     */
    public function boot()
    {
        require routes_path('web.php');
        require routes_path('api.php');

    }
}