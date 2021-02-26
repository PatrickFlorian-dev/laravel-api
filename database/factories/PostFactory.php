<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'post_author' => $this->faker->name($gender = null|'male'|'female'),
            'category' => $this->faker->word(),
            'html_content' => $this->faker->randomHtml(2,3)
        ];
    }
}
