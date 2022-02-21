<?php

namespace Database\Seeders;

use App\Models\Footprint;
use App\Models\Tree;
use App\Models\Vehicle;
use App\Models\Visit;
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
        // \App\Models\User::factory(10)->create();
        Tree::factory(10)->create();
        Vehicle::factory(5)->create();
        Footprint::factory(200)->create();
        Visit::factory(1)->create();
    }
}
