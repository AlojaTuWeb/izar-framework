<?php

namespace App\Providers;

use Slim\App;

/**
 * Class ServiceProvider
 * @package App\Providers
 */
abstract class ServiceProvider
{
    /**
     * @var App
     */
    public App $app;

    /**
     * ServiceProvider constructor.
     * @param  App  $app
     */
    final public function __construct(App &$app)
    {
        $this->app = $app;
    }

    /**
     * @return mixed
     */
    abstract public function register();

    /**
     * @return mixed
     */
    abstract public function boot();

    /**
     * @param  App  $app
     * @param  array  $providers
     */
    final public static function setup(App &$app, array $providers)
    {
        $providers = array_map(fn ($provider) => new $provider($app), $providers);

        array_walk($providers, fn (ServiceProvider $provider) => $provider->register());
        array_walk($providers, fn (ServiceProvider $provider) => $provider->boot());
    }
}