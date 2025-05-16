@extends('layouts.admin')

@section('title', $newsOne->title)
@section('header', $newsOne->title)

@section('content')
    <a href="{{ route('news.editNews', $newsOne->id) }}" class="btn btn-warning mb-3">Редагувати новину</a>
    <p><strong>Автор:</strong> {{ $newsOne->author->name ?? 'Без автора' }}</p>
    <p><strong>Рубрика:</strong> {{ $newsOne->rubric->title ?? 'Без рубрики' }}</p>
    <div class="mt-4">{{ $newsOne->content }}</div>
@endsection
