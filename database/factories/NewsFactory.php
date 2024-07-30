<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\News;
use App\Models\Rubric;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(3),
            'content' => fake()->text,
            'author_id' => Author::factory(),
            'rubric_id' => Rubric::factory()
        ];
    }
}
