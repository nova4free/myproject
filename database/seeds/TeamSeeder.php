<?php

use App\Enterprise;
use App\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Enterprise::all()->each(function(Enterprise $enterprise){
            $enterprise->teams()->saveMany(factory(Team::class, 3)->make());
        });

        $developers = \App\User::role('developer')->get();

        Team::all()->each(function(Team $team) use ($developers){
            $developers->random(random_int(1,10));
            $team->users()->attach($developers);
        });
    }
}
