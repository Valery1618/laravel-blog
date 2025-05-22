@extends('layouts.admin')

@section('title', $newsOne->title)
@section('header', $newsOne->title)

@section('content')
    <div class="d-flex gap-2 mb-3">
        <a href="{{ route('news.editNews', $newsOne->id) }}" class="btn btn-warning mb-3">Редагувати новину</a>
        <form action="{{ route('news.destroy', $newsOne->id) }}" method="POST" onsubmit="return confirm('Точно видалити новину?')">@csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger mb-3">Видалити новину</button>
        </form>
    </div>
    <p><strong>Автор:</strong> {{ $newsOne->author->name ?? 'Без автора' }}</p>
    <p><strong>Рубрика:</strong> {{ $newsOne->rubric->title ?? 'Без рубрики' }}</p>
    <div class="mt-4">{{ $newsOne->content }}</div>
@endsection
