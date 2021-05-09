<?php

namespace App\Http\Controllers;

class HomeController
{
    public function index($response)
    {
        $response->getBody()->write('HomeController page!!');

        return $response;
    }

    public function show($response, $name, $id)
    {
        $response->getBody()->write("Welcome {$name} you have an id of {$id}");

        return $response;
    }
}