<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
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

    public function getAuthorForm(): View
    {
     return view('/authors/create_author');
    }

    public function storeAuthor(Request $request): RedirectResponse
    {
        $validated =  $request->validate([
            'name'  => 'required|string|max:255',
        ]);
        Author::createAuthor($validated);

        return redirect()->route('authors.loadAuthors')->with('success', 'Додано нового автора');
    }


}
