@extends('layouts.admin')

@section('title', $newsOne->title)
@section('header', $newsOne->title)

@section('content')
    <p><strong>Автор:</strong> {{ $newsOne->author->name ?? 'Без автора' }}</p>
    <p><strong>Рубрика:</strong> {{ $newsOne->rubric->title ?? 'Без рубрики' }}</p>
    <div class="mt-4">{{ $newsOne->content }}</div>
@endsection
