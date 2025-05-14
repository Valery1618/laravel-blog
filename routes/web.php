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

Route::get('/news', [NewsController::class, 'showList'])->name('news.showList');
Route::get('/news/create',  [NewsController::class, 'getForm'])->name('news.createNews');
Route::post('/news/create', [NewsController::class, 'store'])->name('news.storeNews');
Route::get('/news/{id}', [NewsController::class, 'showOne'])->name('news.showOne');
Route::get('/authors', [AuthorController::class, 'loadAuthors'])->name('authors.loadAuthors');
Route::get('/authors/createAuthor', [AuthorController::class, 'getAuthorForm'])->name('authors.createAuthor');
Route::post('/authors/createAuthor', [AuthorController::class, 'storeAuthor'])->name('authors.storeAuthor');
Route::get('/authors/{id}', [AuthorController::class, 'loadOneAuthor'])->name('authors.loadOneAuthor');;
Route::get('/rubrics', [RubricController::class, 'loadRubrics'])->name('rubrics.loadRubrics');
Route::get('/rubrics/{id}', [RubricController::class, 'loadOneRubric'])->name('rubrics.loadOneRubric');




require __DIR__.'/auth.php';
