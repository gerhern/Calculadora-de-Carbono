<?php

namespace Database\Factories;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vehicle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'vehicle_name' => $this->faker->sentence(),
            'carbon_generated' => $this->faker->randomFloat(3, 0, 500),
            'times_used' => $this->faker->numberBetween(1, 500)
        ];
    }
}
