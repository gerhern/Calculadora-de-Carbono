<?php

namespace Database\Factories;

use App\Models\Footprint;
use Illuminate\Database\Eloquent\Factories\Factory;

class FootprintFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Footprint::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'distance' => $this->faker->numberBetween(1,1000),
            'carbon_footprint' => $this->faker->randomFloat(3, 0, 500),
            'change_transport' => $this->faker->boolean(80),
            'vehicle_id' => $this->faker->numberBetween(1,5)
        ];
    }
}
