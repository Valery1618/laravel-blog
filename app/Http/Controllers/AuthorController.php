<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Author;

class AuthorController extends Controller
{

    public function loadAuthors(): View
    {
        return view('/authors/all_authors', ['authors' => Author::getAllAuthors()]);
    }

    public function loadOneAuthor(int $authorId): View
    {
        return view('/authors/one_author', ['author' => Author::getAuthorById($authorId)]);
    }


}
