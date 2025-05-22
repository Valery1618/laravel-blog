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
    // News list & One news
    public function showList(): View
    {
        return view('/news/list', ['news' => News::getList()]);
    }

    public function showOne(int $id): View
    {
        return view('/news/one', ['newsOne' => News::getOne($id)]);
    }

    // Insert function
    public function getForm(): View
    {
        return view('news/create', [
            'authors' => Author::all(),
            'rubrics' => Rubric::all()
        ]);
    }

    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
           'title' => 'required|string|max:255',
           'content' => 'required|string',
           'author_id' => 'required|exists:authors,id',
           'rubric_id' => 'required|exists:rubrics,id',
        ]);

        $news = News::createNews($validated);

        return redirect()->route('news.showOne',$news->id)->with('success', 'Новина додана');
    }

    // Update function
    public function editForm(int $id): View
    {
        return view('news/edit_news', [
            'newsOne' => News::getOne($id),
            'authors' => Author::all(),
            'rubrics' => Rubric::all()
        ]);
    }

    public function  updateNews(int $id, Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author_id' => 'required|exists:authors,id',
            'rubric_id' => 'required|exists:rubrics,id',
        ]);

        News::editNews($id, $validated);

        return redirect()->route('news.showOne', $id)->with('success', 'Новина оновлена');
    }

    public function destroy(int $id): RedirectResponse
    {
        News::deleteNews($id);
        return redirect()->route('news.showList')->with('success', 'Новина видалена');
    }


}
