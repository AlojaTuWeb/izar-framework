<?php

namespace App\Support;

use Illuminate\Support\Str;

/**
 * Class Route
 * @package App\Support
 */
class Route
{
    public static $app;

    public static function setup(&$app)
    {
        self::$app = $app;

        return $app;
    }

    /**
     * @param $verb
     * @param $parameters
     * @return mixed
     */
    public static function __callStatic($verb, $parameters)
    {
        $app = self::$app;

        [$route, $action] = $parameters;

        self::validation($route, $verb, $action);

        return is_callable($action)
            ? $app->$verb($route, $action)
            : $app->$verb($route, self::resolveViaController($action));
    }

    /**
     * @param $action
     * @return array
     */
    public static function resolveViaController($action)
    {
        $class = Str::before($action, '@');
        $method = Str::after($action, '@');
        $controller = config('routing.controllers.namespace') . $class;

        return [$controller, $method];
    }

    /**
     * @param $route
     * @param $verb
     * @param $action
     */
    protected static function validation($route, $verb, $action)
    {
        $exception = "Unresolvable Route callback/Controller action";
        $context = json_encode(compact('route', 'action', 'verb'));
        $fails = !((is_callable($action)) or (is_string($action) and Str::is("*@*", $action)));

        throw_when($fails, $exception . $context);
    }
}