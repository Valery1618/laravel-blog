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


Route::prefix('news')->name('news.')->group(function () {
    Route::get('/', [NewsController::class, 'showList'])->name('showList');
    Route::get('/create', [NewsController::class, 'getForm'])->name('createNews');
    Route::post('/create', [NewsController::class, 'store'])->name('storeNews');
    Route::get('/{id}', [NewsController::class, 'showOne'])->name('showOne');
    Route::get('/{id}/edit', [NewsController::class, 'editForm'])->name('editNews');
    Route::put('/{id}', [NewsController::class, 'updateNews'])->name('updateNews');
    Route::delete('/{id}', [NewsController::class, 'destroy'])->name('destroy');
});

Route::prefix('authors')->name('authors.')->group(function () {
    Route::get('/', [AuthorController::class, 'loadAuthors'])->name('loadAuthors');
    Route::get('/create', [AuthorController::class, 'getAuthorForm'])->name('createAuthor');
    Route::post('/create', [AuthorController::class, 'storeAuthor'])->name('storeAuthor');
    Route::get('/{id}', [AuthorController::class, 'loadOneAuthor'])->name('loadOneAuthor');
    Route::get('/{id}/edit', [AuthorController::class, 'editAuthorForm'])->name('editAuthor');
    Route::put('/{id}', [AuthorController::class, 'updateAuthor'])->name('updateAuthor');
    Route::delete('/{id}', [AuthorController::class, 'destroyAuthor'])->name('destroyAuthor');
});

Route::prefix('rubrics')->name('rubrics.')->group(function () {
    Route::get('/', [RubricController::class, 'loadRubrics'])->name('loadRubrics');
    Route::get('/create', [RubricController::class, 'getRubricForm'])->name('createRubric');
    Route::post('/create', [RubricController::class, 'storeRubric'])->name('storeRubric');
    Route::get('/{id}', [RubricController::class, 'loadOneRubric'])->name('loadOneRubric');
    Route::get('/{id}/edit', [RubricController::class, 'editRubricForm'])->name('editRubric');
    Route::put('/{id}', [RubricController::class, 'updateRubric'])->name('updateRubric');
    Route::delete('/{id}', [RubricController::class, 'destroyRubric'])->name('destroyRubric');
});


require __DIR__.'/auth.php';
