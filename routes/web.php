<?php

use App\Http\Controllers\HomeController;
use App\Support\Route;

Route::get('/{name}', [HomeController::class, 'index']);
Route::get('/dashboard/{name}/{id}', [HomeController::class, 'show']);
/*$app->get('/api', function (Request $request, Response $response, array $args) {
    $payload = json_encode(['hello' => 'world'], JSON_PRETTY_PRINT);
    $response->getBody()->write($payload);

    return $response->withHeader('Content-Type', 'application/json');
});*/