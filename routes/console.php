<?php

use App\Models\Team;
use App\Support\Console;

Console::command('tinker', function () {
    $team = Team::first();

    $this->info("$team->name belongs to {$team->user->first_name}");
});