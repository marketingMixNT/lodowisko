<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Post;

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
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'slug' => $this->faker->slug(),
            'meta_title' => $this->faker->word(),
            'meta_description' => $this->faker->word(),
            'content' => $this->faker->paragraphs(3, true),
            'thumbnail_mobile' => $this->faker->text(),
            'thumbnail' => $this->faker->text(),
            'published_at' => $this->faker->dateTime(),
        ];
    }
}
