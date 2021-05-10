<?php

namespace App\Providers;

use Dotenv\Dotenv;
use Dotenv\Exception\InvalidPathException;

class EnvironmentVariablesServiceProvider extends ServiceProvider
{

    /**
     * @inheritDoc
     */
    public function register()
    {
        try {
            $env = Dotenv::createImmutable(base_path());

            $env->load();
        } catch (InvalidPathException $e) {}
    }

    /**
     * @inheritDoc
     */
    public function boot()
    {
        // TODO: Implement boot() method.
    }
}