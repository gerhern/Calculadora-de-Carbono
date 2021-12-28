<?php

namespace Database\Factories;

use App\Models\tree;
use Illuminate\Database\Eloquent\Factories\Factory;

class TreeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = tree::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->string(),
            'scientific_name' => $this->faker->string(),
            'url_img' => $this->faker->url(),
            'author_img' => $this->faker->name(),
            'absorption_capacity' => $this->faker->randomFloat(2,0,200)
        ];
    }
}
