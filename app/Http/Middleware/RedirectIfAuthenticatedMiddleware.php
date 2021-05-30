<?php

namespace App\Http\Middleware;

use App\Support\Auth;
use Psr\Http\Server\RequestHandlerInterface as Handle;
use Psr\Http\Message\ServerRequestInterface as Request;

/**
 * Middleware Must Also Be Registered To HttpKernel or Registered on specific routes
 **/
class RedirectIfAuthenticatedMiddleware
{
    public function __invoke(Request $request, Handle $handler)
    {
        {
            if (Auth::check()) {
                return redirect('/home');
            }

            return $handler->handle($request);
        }
    }
}