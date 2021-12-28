<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{tree, footprint, vehicle};

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
        footprint::factory(200)->create();
    }
}
