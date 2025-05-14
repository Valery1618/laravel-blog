<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

class Rubric extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public function news(): HasMany
    {
        return $this->hasMany(News::class);
    }

    public static function getAllRubrics(): Collection
    {
        return self::orderBy('title')->get();

    }

    public static function getRubricById(int $rubricId): Rubric
    {
        return self::with(['news.author'])->findOrFail($rubricId);
    }

    public static function createRubric(array $data): Rubric
    {
        return self::create($data);
    }

}
