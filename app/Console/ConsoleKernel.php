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
        Commands\MakeMigrationCommand::class,
        Commands\MakeSeederCommand::class,
    ];
}