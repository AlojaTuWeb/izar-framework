<?php

use DI\Container;
use Slim\Factory\AppFactory;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require __DIR__ . '/../vendor/autoload.php';

// Create Container using PHP-DI
$container = new Container();

$settings = require __DIR__ . '/../app/settings.php';
$settings($container);

// Set container to create App with on AppFactory
AppFactory::setContainer($container);
$app = AppFactory::create();

$middleware = require __DIR__ . '/../app/middleware.php';
$middleware($app);

$app->addErrorMiddleware(true, true, true);

$app->get('/', function (Request $request, Response $response, $parameters)
{
    $response->getBody()->write('Hello World!!');

    return $response;
});

$app->run();