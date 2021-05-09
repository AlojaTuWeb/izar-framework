<?php

namespace App\Providers;

use App\Support\View;
use Slim\Psr7\Factory\ResponseFactory;

/**
 * Class ViewServiceProvider
 * @package App\Providers
 */
class ViewServiceProvider extends ServiceProvider
{

    /**
     * @return mixed|void
     */
    public function register()
    {
        $this->app->getContainer()->set(View::class, function ()
        {
            return new View(new ResponseFactory);
        });
    }

    /**
     * @return mixed|void
     */
    public function boot()
    {
        // TODO: Implement boot() method.
    }
}