<?php

namespace App\Http\Controllers;

use App\Support\View;

class HomeController
{
    public function index(View $view)
    {
        $name = 'Izar-framework';

        return $view('home', compact('name'));
    }

    public function show(View $view, $name, $id)
    {
        return $view('dashboard.home', compact('name', 'id'));
    }
}