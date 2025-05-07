@extends('layouts.admin')

@section('title', 'Список новин')
@section('header', 'Новини')

@section('content')
    @forelse ($news as $newsOne)
        <div class="card mb-3 shadow-sm">
            <div class="card-body">
                <h5>
                    <a href="{{ url('/news/' . $newsOne->id) }}" class="text-dark">{{ $newsOne->title }}</a>
                </h5>
                <p class="text-muted">
                    Автор: {{ $newsOne->author->name ?? 'Без автора' }},
                    Рубрика: {{ $newsOne->rubric->title ?? 'Без рубрики' }}
                </p>
            </div>
        </div>
    @empty
        <div class="alert alert-info">Новини відсутні.</div>
    @endforelse
@endsection
