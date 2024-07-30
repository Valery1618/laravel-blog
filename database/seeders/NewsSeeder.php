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
        News::truncate();//
        Author::truncate();
        Rubric::truncate();

        // Створення авторів
        $authors = Author::factory()->count(5)->create();

        // Створення рубрик
        $rubrics = Rubric::factory()->count(3)->create();

        // Створення новин з прив'язкою до рубрик і авторів
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
