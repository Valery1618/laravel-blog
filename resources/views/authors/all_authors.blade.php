@extends('layouts.admin')

@section('title', 'Автори')
@section('header', 'Список авторів')
@section('add-button')
    <a href="{{ route('authors.createAuthor') }}" class="btn btn-outline-light">+ Додати автора</a>
@endsection

@section('content')
    @forelse($authors as $author)
        <div class="card mb-3">
            <div class="card-body">
                <h5><a href="{{ url('/authors/' . $author->id) }}">{{ $author->name }}</a></h5>
            </div>
        </div>
    @empty
        <div class="alert alert-info">Авторів немає.</div>
    @endforelse
@endsection
