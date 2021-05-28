<?php

use App\Models\Team;
use App\Models\User;
use Phinx\Seed\AbstractSeed;

class TeamSeeder extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     */
    public function run()
    {
        $users = factory(User::class, 10)->create();

        $users->each(fn ($user) => factory(Team::class, 1)->create([
            'user_id' => $user->id
        ]));
    }
}