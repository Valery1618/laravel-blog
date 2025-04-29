<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

class Rubric extends Model
{
    use HasFactory;


    public function news(): HasMany
    {
        return $this->hasMany(News::class);
    }

    public static function getAllRubrics(): Collection
    {
        return self::orderBy('title')->get();

    }

    public static function getRubricById($rubricId): Rubric
    {
        return self::findOrFail($rubricId);
    }

}
