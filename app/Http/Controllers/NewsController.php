<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\View\View;

class NewsController extends Controller
{
    public function showList(): View
    {
        return view('/news/list', ['news' => News::getList()]);
    }

    public function showOne(string $id): View
    {
        return view('/news/one', ['newsOne' => News::getOne($id)]);
    }
}
