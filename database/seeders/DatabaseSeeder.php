<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();
        $foodCat = Category::create([
            'name' => 'Food',
            'slug' => 'food'
        ]);
        $personalCat = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $foodCat->id,
            'title' => 'My First Post',
            'slug' => 'my-first-post',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et varius massa, vel maximus odio. Maecenas tempus purus sed finibus rhoncus. Aliquam maximus quam a lectus iaculis, a fermentum neque luctus. Nulla sollicitudin eu lacus eu eleifend. Maecenas placerat ex fermentum, molestie nibh ut, auctor nunc.</p>'
        ]);
        Post::create([
            'user_id' => $user->id,
            'category_id' => $personalCat->id,
            'title' => 'My Second Post',
            'slug' => 'my-second-post',
            'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus et varius massa, vel maximus odio. Maecenas tempus purus sed finibus rhoncus. Aliquam maximus quam a lectus iaculis, a fermentum neque luctus. Nulla sollicitudin eu lacus eu eleifend. Maecenas placerat ex fermentum, molestie nibh ut, auctor nunc.</p>'
        ]);
    }
}
