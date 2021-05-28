<?php

namespace Boot\Foundation\Bootstrappers;

use App\Console\ConsoleKernel;
use App\Http\HttpKernel;
use Boot\Foundation\Kernel;

class LoadEnvironmentDetector extends Bootstrapper
{
    public const HTTP_ENV = HttpKernel::class;
    public const CONSOLE_ENV = ConsoleKernel::class;

    public function boot()
    {
        $http = class_basename(self::HTTP_ENV) === class_basename($this->kernel);
        $console = class_basename(self::CONSOLE_ENV) === class_basename($this->kernel);

        $this->app->bind('bootedViaHttp', fn () => $http);
        $this->app->bind('bootedViaConsole', fn () => $console);

        $this->app->bind(Kernel::class, fn () => $this->kernel);
    }
}