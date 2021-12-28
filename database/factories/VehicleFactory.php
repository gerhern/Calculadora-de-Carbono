<?php

namespace Database\Factories;

use App\Models\vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = vehicle::class;

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
            'times_used' => $this->faker->random_int(1, 500)
        ];
    }
}
