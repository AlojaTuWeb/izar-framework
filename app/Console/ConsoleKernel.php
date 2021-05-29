<?php

namespace App\Console;

use Boot\Foundation\ConsoleKernel as Kernel;

class ConsoleKernel extends Kernel
{
    public array $commands = [
        Commands\DatabaseFreshCommand::class,
        Commands\DatabaseTableDisplayCommand::class,
        Commands\DatabaseRunSeederCommand::class,
        Commands\DatabaseMigrateCommand::class,
        Commands\DatabaseRollbackMigrationCommand::class,
        Commands\MakeCommandCommand::class,
        Commands\MakeControllerCommand::class,
        Commands\MakeEventCommand::class,
        Commands\MakeFactoryCommand::class,
        Commands\MakeListenerCommand::class,
        Commands\MakeMiddlewareCommand::class,
        Commands\MakeMigrationCommand::class,
        Commands\MakeModelCommand::class,
        Commands\MakeRequestCommand::class,
        Commands\MakeSeederCommand::class,
        Commands\MakeServiceProviderCommand::class,
        Commands\ViewClearCommand::class,
    ];
}