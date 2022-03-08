<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

class PostFactory extends Factory
{
    /**
     * Define the model's default state
     */
    #[ArrayShape(['user_id' => Factory::class, 'category_id' => Factory::class, 'title' => "string", 'slug' => "string", 'excerpt' => "string", 'body' => "string", 'published_at' => DateTime::class])]
    public function definition(): array{
        return [
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'title' => $this->faker->unique()->sentence,
            'slug' => $this->faker->unique()->slug,
            'excerpt' => '<p>'.implode('</p><p>',$this->faker->paragraphs(2)).'</p>',
            'body' =>  '<p>'.implode('</p><p>',$this->faker->paragraphs(6)).'</p>',
            'published_at' => $this->faker->dateTime
        ];
    }
}
