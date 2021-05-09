<?php

use Slim\App;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

return function (App $app)
{
    $app->get('/home', function (Request $request, Response $response, $parameters)
    {
        $name = 'Izar Framework';

        return view($response, 'home', compact('name'));
    });
    $app->get('/', function (Request $request, Response $response, $parameters)
    {
        $response->getBody()->write('Hello World!!');

        return $response;
    });
    $app->get('/api', function (Request $request, Response $response, array $args) {
        $payload = json_encode(['hello' => 'world'], JSON_PRETTY_PRINT);
        $response->getBody()->write($payload);

        return $response->withHeader('Content-Type', 'application/json');
    });
};
