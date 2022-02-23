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
        
        Vehicle::create([
            'vehicle_name' => 'Taxi',
            'carbon_generated' => 211.76,
            'times_used' => 0
        ],);

        Vehicle::create([
            'vehicle_name' => 'Autobús',
            'carbon_generated' => 104.71,
            'times_used' => 0
        ]);

        Vehicle::create([
            'vehicle_name' => 'Automóvil Grande (Gasolina)',
            'carbon_generated' => 282.95,
            'times_used' => 0
        ]);

        Vehicle::create([
            'vehicle_name' => 'Automóvil Mediano (Gasolina)',
            'carbon_generated' => 192.28,
            'times_used' => 0
        ]);

        Vehicle::create([
            'vehicle_name' => 'Motocicleta',
            'carbon_generated' => 102.89,
            'times_used' => 0
        ]);
        
        // Footprint::factory(200)->create();

        Visit::create([
            'total_visits' => 0
        ]);
    }
}
