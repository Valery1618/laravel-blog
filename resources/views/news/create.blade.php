@extends('layouts.admin')

@section('title', 'Створити новину')

@section('content')
    <form method="POST" action="{{ route('news.storeNews') }}">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Заголовок</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Текст</label>
            <textarea name="content" class="form-control" rows="4" required></textarea>
        </div>

        <div class="mb-3">
            <label for="author_id" class="form-label">Автор</label>
            <select name="author_id" class="form-select" required>
                @foreach($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="rubric_id" class="form-label">Рубрика</label>
            <select name="rubric_id" class="form-select" required>
                @foreach($rubrics as $rubric)
                    <option value="{{ $rubric->id }}">{{ $rubric->title }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Зберегти</button>
    </form>
@endsection

