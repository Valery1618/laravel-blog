<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;

    public static function getList(): Collection
    {
        return self::get();
    }

    public static function getOne($id): News
    {
        //return self::find($id);
        return News::select('news.*', 'authors.name', 'rubrics.title AS rubric_title')
            ->join('authors', 'news.author_id', '=', 'authors.id')
            ->join('rubrics', 'news.rubric_id', '=', 'rubrics.id')
            ->where('news.id', '=', $id)
            ->first();
    }
}
