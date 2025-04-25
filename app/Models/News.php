<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;

    public function author(): BelongsTo
    {
        return $this->belongsTo(Author::class);
    }

    public function rubric(): BelongsTo
    {
        return $this->belongsTo(Rubric::class);

    }

    public static function getList(): Collection
    {
        return self::get();
    }


    public static function getOne($id): News
    {
        return self::with(['author', 'rubric'])->findOrFail($id);
    }
    /*public static function getOne($id): News
    {
        return News::select('news.*', 'authors.name AS author_name', 'rubrics.title AS rubric_title')
            ->join('authors', 'news.author_id', '=', 'authors.id')
            ->join('rubrics', 'news.rubric_id', '=', 'rubrics.id')
            ->where('news.id', '=', $id)
            ->first();
    }*/
}
