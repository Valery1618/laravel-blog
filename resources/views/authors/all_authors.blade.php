@extends('layouts.admin')

@section('title', 'Список авторів')
@section('header', 'Автори')

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
