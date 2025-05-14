<?php

namespace App\Http\Controllers;

use App\Models\Rubric;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RubricController extends Controller
{
    public function loadRubrics(): View
    {
        return view('/rubrics/all_rubrics', ['rubrics' => Rubric::getAllRubrics()]);
    }

    public function loadOneRubric(int $rubricId): View
    {
        return view('/rubrics/one_rubric', ['rubric' => Rubric::getRubricById($rubricId)]);
    }

    public function getRubricForm(): View
    {
        return view('/rubrics/create_rubric');
    }

    public function storeRubric(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255'
        ]);
        Rubric::createRubric($validated);

        return redirect()->route('rubrics.loadRubrics')->with('success', 'Нова рубрика додана');
    }
}
