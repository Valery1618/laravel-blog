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
            'name'  => 'required|string|max:255'
        ]);
        $author = Author::createAuthor($validated);

        return redirect()->route('authors.loadOneAuthor', $author->id)->with('success', 'Додано нового автора');
    }

    public function editAuthorForm($authorId): View
    {
        return view('/authors/edit_author', [
            'author' => Author::getAuthorById($authorId)
        ]);
    }

    public function updateAuthor(int $authorId, Request $request): RedirectResponse
    {
        $validated =  $request->validate([
            'name'  => 'required|string|max:255'
        ]);

        Author::editAuthor($authorId, $validated);

        return redirect()->route('authors.loadOneAuthor', $authorId)->with('success', 'Автора оновлено');
    }

}
