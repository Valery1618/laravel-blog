<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class News extends Model
{
    use HasFactory;

    public static function getList(): Collection
    {
        return self::get();
    }

    public static function getOne($id): News
    {
        return self::find($id);
    }
}
