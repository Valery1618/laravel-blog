<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;


class Author extends Model
{
    use HasFactory;


    public function news(): HasMany
    {
        return $this->hasMany(News::class);
    }

    public static function getAllAuthors(): Collection
    {
        return self::orderBy('name')->get();

    }

    public static function  getAuthorById($authorId): Author
    {
        return self::findOrFail($authorId);
    }
}
