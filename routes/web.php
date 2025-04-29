<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RubricController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/news', [NewsController::class, 'showList']);
Route::get('/news/{id}', [NewsController::class, 'showOne']);
Route::get('/authors', [AuthorController::class, 'loadAuthors']);
Route::get('/authors/{id}', [AuthorController::class, 'loadOneAuthor']);
Route::get('/rubrics', [RubricController::class, 'loadRubrics']);
Route::get('/rubrics/{id}', [RubricController::class, 'loadOneRubric']);

require __DIR__.'/auth.php';
