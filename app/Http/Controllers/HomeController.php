<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Support\View;
use Psr\Http\Message\ResponseInterface;

/**
 * Class HomeController
 * @package App\Http\Controllers
 */
class HomeController
{
    /**
     * @param  View  $view
     * @param  User  $user
     * @return ResponseInterface
     */
    public function index(View $view, User $user)
    {
        $user = $user->find(1);
        $name = 'Izar-framework';

        return $view('home', compact('name', 'user'));
    }
}