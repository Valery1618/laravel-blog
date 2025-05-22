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
        $rubric = Rubric::createRubric($validated);

        return redirect()->route('rubrics.loadOneRubric', $rubric->id)->with('success', 'Нова рубрика додана');
    }

    public function editRubricForm(int $rubricId): View
    {
        return view('/rubrics/edit_rubric', [
            'rubric' => Rubric::getRubricById($rubricId)
        ]);
    }

    public function updateRubric(int $rubricId, Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255'
        ]);

        Rubric::editRubric($rubricId, $validated);
        return redirect()->route('rubrics.loadOneRubric', $rubricId)->with('success', 'Рубрика відредагована');
    }

    public function destroyRubric(int $rubricId): RedirectResponse
    {
        Rubric::deleteRubric($rubricId);
        return redirect()->route('rubrics.loadRubrics', $rubricId)->with('success', 'Рубрику видалено');
    }
}
