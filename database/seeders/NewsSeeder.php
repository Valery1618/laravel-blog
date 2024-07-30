<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\News;
use App\Models\Rubric;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create authors
        $authors = Author::factory()->count(5)->create();

        // Create rubrics
        $rubrics = Rubric::factory()->count(3)->create();

        // Creation of news with reference to rubrics and authors
        $authors->each(function ($author) use ($rubrics) {
            News::factory()
                ->count(4)
                ->create([
                    'author_id' => $author->id,
                    'rubric_id' => $rubrics->random()->id,
                ]);
        });
    }
}
