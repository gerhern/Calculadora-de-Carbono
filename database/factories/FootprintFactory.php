<?php

namespace Database\Factories;

use App\Models\footprint;
use App\Models\vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

class FootprintFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = footprint::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'distance' => $this->faker->random_int(0,100),
            'carbon_footprint' => $this->faker->randomFloat(null, 0, 300),
            'change_transport' => $this->faker->boolean(),
            'vehicle_id' => vehicle::factory()->create()
        ];
    }
}
