<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     */
    #[ArrayShape(['name' => "string", 'slug' => "string"])]
    public function definition(): array {
        return [
            'name' => $this->faker->unique()->word(),
            'slug' => $this->faker->unique()->slug()
        ];
    }
}
