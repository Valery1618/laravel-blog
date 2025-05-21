@extends('layouts.admin')

@section('title', 'Редагувати автора')
@section('header', 'Редагування автора')

@section('content')
    <form method="POST" action="{{ route('authors.updateAuthor', $author->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Ім'я автора</label>
            <input type="text" class="form-control" id="name" name="name" value="{{old('name', $author->name)}}" required>
        </div>

        <button type="submit" class="btn btn-primary">Оновити автора</button>
    </form>
@endsection
