@extends('layouts.admin')

@section('title', 'Створити нового автора')

@section('header', 'Новий автор')

@section('content')
        <form method="POST" action="{{ route('authors.storeAuthor') }}">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Ім'я автора</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <button type="submit" class="btn btn-primary">Додати автора</button>
        </form>
@endsection




