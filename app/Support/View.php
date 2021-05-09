<?php

namespace App\Support;

use Jenssegers\Blade\Blade;
use Psr\Http\Message\ResponseFactoryInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ResponseInterface as Response;

/**
 * Class View
 * @package App\Support
 */
class View
{
    /**
     * @var Response
     */
    public Response $response;

    /**
     * View constructor.
     * @param  ResponseFactoryInterface  $factory
     */
    public function __construct(ResponseFactoryInterface $factory)
    {
        $this->response = $factory->createResponse(200, 'Success');
    }

    /**
     * @param  string  $template
     * @param  array  $with
     * @return Response
     */
    public function __invoke(string $template = '', array $with = []) : ResponseInterface
    {
        $cache = config('blade.cache');
        $views = config('blade.views');

        $blade = (new Blade($views, $cache))->make($template, $with);

        $this->response->getBody()->write($blade->render());

        return $this->response;
    }
}