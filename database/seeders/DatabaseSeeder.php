<?php

namespace Database\Seeders;

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

        Tree::create([
            'name' => 'Mezquite',
            'scientific_name' => 'Propis Glandulosa',
            'url_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/5c/Velvet_mesquite.jpg/1024px-Velvet_mesquite.jpg',
            'author_img' => 'Sue in az/Trabajo propio/wikipedia',
            'absorption_capacity' => 17,
            'cost' => 150
        ]);

        Tree::create([
            'name' => 'Fresno',
            'scientific_name' => 'Fraxinus Uhdei',
            'url_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Starr_030405-0078_Fraxinus_uhdei.jpg/800px-Starr_030405-0078_Fraxinus_uhdei.jpg',
            'author_img' => 'Forest & Kim Starr/wikipedia',
            'absorption_capacity' => 30.564,
            'cost' => 295
        ]);

        Tree::create([
            'name' => 'Mandarino',
            'scientific_name' => 'Citrus Reticulata',
            'url_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Limonaia_del_Castel_-_DSC02147.JPG/800px-Limonaia_del_Castel_-_DSC02147.JPG',
            'author_img' => 'Daderot/Fotografía propia/Dominio público',
            'absorption_capacity' => 31.101,
            'cost' => 150
        ]);

        Tree::create([
            'name' => 'Manglar blanco',
            'scientific_name' => 'Laguncularia Racemosa',
            'url_img' => 'http://3.bp.blogspot.com/-6vhcV5bqDbA/UWB73STgcHI/AAAAAAAAAH8/-WJLfT_VyPg/s640/manglares+2.JPG',
            'author_img' => 'Autor desconocido/infinitanaturaleza.com',
            'absorption_capacity' => 38.706
        ]);

        Tree::create([
            'name' => 'Naranjo',
            'scientific_name' => 'Citrus × Sinensis',
            'url_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6e/Laranxeira_Naranjo_GFDL.JPG/1280px-Laranxeira_Naranjo_GFDL.JPG',
            'author_img' => 'Luis Miguel Bugallo Sánchez/Trabajo propio/wikipedia',
            'absorption_capacity' => 49.345,
            'cost' => 150
        ]);

        Tree::create([
            'name' => 'Limonero',
            'scientific_name' => 'Citrus × Limon',
            'url_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/75/Citrus_limonum_3.JPG/1280px-Citrus_limonum_3.JPG',
            'author_img' => 'Vicenç Salvador Torres Guerola/Trabajo propio/wikipedia',
            'absorption_capacity' => 106.933,
            'cost' => 150
        ]);

        Tree::create([
            'name' => 'Eucalipto blanco',
            'scientific_name' => 'Eucalyptus Globulus',
            'url_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Starr_031214-0076_Eucalyptus_globulus.jpg/800px-Starr_031214-0076_Eucalyptus_globulus.jpg',
            'author_img' => 'Forest & Kim Starr/wikipedia',
            'absorption_capacity' => 162.257,
            'cost' => 338
        ]);

        Tree::create([
            'name' => 'Pirul',
            'scientific_name' => 'Eucalyptus Globulus',
            'url_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/67/Starr_031214-0076_Eucalyptus_globulus.jpg/800px-Starr_031214-0076_Eucalyptus_globulus.jpg',
            'author_img' => 'Forest & Kim Starr/wikipedia',
            'absorption_capacity' => 162.257,
        ]);

        Tree::create([
            'name' => 'Palmera de abanico',
            'scientific_name' => 'Washingtonia Robusta',
            'url_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/Washingtonia_robusta.jpg/800px-Washingtonia_robusta.jpg',
            'author_img' => 'Geographer/Image: Washingtonia_robusta.jpg/wikipedia',
            'absorption_capacity' => 221.03,
            'cost' => 150
        ]);

        Tree::create([
            'name' => 'Roble sedoso',
            'scientific_name' => 'Grevillea Robusta',
            'url_img' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/d/da/Grevillea_robusta_flowering_in_Gan_Shmuel01.jpg/800px-Grevillea_robusta_flowering_in_Gan_Shmuel01.jpg',
            'author_img' => 'RickP/14/04/2006/self-made,/wikipedia',
            'absorption_capacity' => 229.28,
            'cost' => 230
        ]);
        
///////////////////////////////////////////////////////////
        Vehicle::create([
            'vehicle_name' => 'Taxi',
            'carbon_generated' => 211.76,
            'times_used' => 0
        ]);

        Vehicle::create([
            'vehicle_name' => 'Autobús',
            'carbon_generated' => 104.71,
            'times_used' => 0
        ]);

        Vehicle::create([
            'vehicle_name' => 'Automóvil Grande (Camioneta)',
            'carbon_generated' => 282.95,
            'times_used' => 0
        ]);

        Vehicle::create([
            'vehicle_name' => 'Automóvil Mediano (4 pasajeros)',
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
