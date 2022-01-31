<?php

namespace Database\Seeders;

use App\Models\Place;
use App\Models\Thing;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $things = Thing::factory(100)->create();
        $places = Place::factory(10)->create();
        // \App\Models\User::factory(10)->create();
    }
}
