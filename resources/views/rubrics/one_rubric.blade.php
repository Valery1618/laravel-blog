@extends('layouts.admin')

@section('title', $rubric->title)
@section('header', 'Новини рубрики: ' . $rubric->title)

@section('content')
    <a href="{{ route('rubrics.editRubric', $rubric->id) }}" class="btn btn-warning mb-3">Редагувати рубрику</a>
    @forelse($rubric->news as $news)
        <div class="card mb-3">
            <div class="card-body">
                <h5><a href="{{ url('/news/' . $news->id) }}">{{ $news->title }}</a></h5>
                <p class="text-muted">Автор: {{ $news->author->name ?? 'Без автора' }}</p>
            </div>
        </div>
    @empty
        <div class="alert alert-info">У цій рубриці ще немає новин.</div>
    @endforelse
@endsection
