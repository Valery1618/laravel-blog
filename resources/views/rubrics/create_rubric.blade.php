@extends('layouts.admin')

@section('title', 'Створити нову рубрику')

@section('header', 'Нова рубрика')

@section('content')
    <form method="POST" action="{{ route('rubrics.storeRubric') }}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Назва рубрики</label>
            <input type="text" class="form-control" id="name" name="title" required>
        </div>
        <button type="submit" class="btn btn-primary">Додати рубрику</button>
    </form>
@endsection
