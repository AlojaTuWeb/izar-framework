<?php

use App\Providers\ServiceProvider;
use DI\Bridge\Slim\Bridge as SlimAppFactory;
use DI\Container;

$app = SlimAppFactory::create(new Container);

ServiceProvider::setup($app, (array)config('app.providers'));

return $app;