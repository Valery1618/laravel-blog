@extends('layouts.admin')

@section('title', $author->name)
@section('header', 'Новини автора: ' . $author->name)

@section('content')
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
