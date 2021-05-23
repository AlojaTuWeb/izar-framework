<?php

namespace App\Providers;

use DB;

class DatabaseServiceProvider extends ServiceProvider
{
    /**
     * @inheritDoc
     */
    public function register()
    {
        $options = data_get(config('database.connections'), config('database.default'));

        $capsule = new DB();
        $capsule->addConnection($options);
        $capsule->setAsGlobal();
        $capsule->bootEloquent();

        $this->bind(DB::class, fn () => $capsule);
    }

    /**
     * @inheritDoc
     */
    public function boot()
    {
        // TODO: Implement boot() method.
    }
}