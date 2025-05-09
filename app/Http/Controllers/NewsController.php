<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\News;
use App\Models\Rubric;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NewsController extends Controller
{
    public function showList(): View
    {
        return view('/news/list', ['news' => News::getList()]);
    }

    public function showOne(int $id): View
    {
        return view('/news/one', ['newsOne' => News::getOne($id)]);
    }

    public function getForm(): View
    {
        return view('news/create', [
            'authors' => Author::all(),
            'rubrics' => Rubric::all()
        ]);
    }

    //todo call on form submit
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
           'title' => 'required|string|max:255',
           'content' => 'required|string',
           'author_id' => 'required|exists:authors,id',
           'rubric_id' => 'required|exists:rubrics,id',
        ]);

        News::createNews($validated);

        return redirect()->route('news.showList')->with('success', 'Новина додана');
    }
}
