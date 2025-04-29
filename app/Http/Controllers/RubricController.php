<?php

namespace App\Http\Controllers;

use App\Models\Rubric;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RubricController extends Controller
{
    public function loadRubrics(): View
    {
        return view('/rubrics/all_rubrics', ['rubrics' => Rubric::getAllRubrics()]);
    }

    public function loadOneRubric(string $rubricId): View
    {
        return view('/rubrics/one_rubric', ['rubric' => Rubric::getRubricById($rubricId)]);
    }
}
