@extends('layouts.admin')

@section('title', $author->name)
@section('header', 'Новини автора: ' . $author->name)

@section('content')
    <div class="d-flex gap-2 mb-3">
        <a href="{{ route('authors.editAuthor', $author->id) }}" class="btn btn-warning mb-3">Редагувати автора</a>
        <form action="{{ route('authors.destroyAuthor', $author->id) }}" method="POST" onsubmit="return confirm('Точно видалити автора?')">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger mb-3">Видалити автора</button>
        </form>
    </div>
    @forelse($author->news as $news)
        <div class="card mb-3">
            <div class="card-body">
                <h5><a href="{{ url('/news/' . $news->id) }}">{{ $news->title }}</a></h5>
                <p class="text-muted">Рубрика: {{ $news->rubric->title ?? 'Без рубрики' }}</p>
            </div>
        </div>
    @empty
        <div class="alert alert-info">Цей автор ще не має новин.</div>
    @endforelse
@endsection
