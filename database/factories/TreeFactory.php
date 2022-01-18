<?php

namespace Database\Factories;

use App\Models\Tree;
use Illuminate\Database\Eloquent\Factories\Factory;

class TreeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tree::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => $this->faker->firstName(),
            'scientific_name' => $this->faker->name(),
            'url_img' => $this->faker->url(),
            'author_img' => $this->faker->name(),
            'absorption_capacity' => $this->faker->randomFloat(2,0,200)
        ];
    }
}
