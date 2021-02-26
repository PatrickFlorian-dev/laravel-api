<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        return Post::create([
            'title' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'post_author' => $this->faker->name($gender = null|'male'|'female'),
            'category' => $this->faker->word(),
            'html_content' => $this->faker->randomHtml(2,3)
        ]);
    }
}
