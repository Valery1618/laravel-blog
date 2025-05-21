<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;


class Author extends Model
{
    use HasFactory;

    protected  $fillable = ['name'];


    public function news(): HasMany
    {
        return $this->hasMany(News::class);
    }

    public static function getAllAuthors(): Collection
    {
        return self::orderBy('name')->get();

    }

    public static function  getAuthorById(int $authorId): Author
    {
        return self::with(['news.rubric'])->findOrFail($authorId);
    }

    public static function createAuthor(array $data): Author
    {
        return self::create($data);
    }

    public static function  editAuthor(int $authorId, array $data): Author
    {
        $author = self::getAuthorById($authorId);
        $author->update($data);
        return $author;
    }
}
