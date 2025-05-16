@extends('layouts.admin')

@section('title', 'Редагувати новину')
@section('header', 'Редагування новини')

@section('content')
    <form method="POST" action="{{ route('news.updateNews', $newsOne->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Заголовок</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $newsOne->title) }}" required>
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Контент</label>
            <textarea name="content" id="content" class="form-control" required>{{ old('content', $newsOne->content) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="author_id" class="form-label">Автор</label>
            <select name="author_id" class="form-control">
                @foreach ($authors as $author)
                    <option value="{{ $author->id }}" {{ $newsOne->author_id == $author->id ? 'selected' : '' }}>
                        {{ $author->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="rubric_id" class="form-label">Рубрика</label>
            <select name="rubric_id" class="form-control">
                @foreach ($rubrics as $rubric)
                    <option value="{{ $rubric->id }}" {{ $newsOne->rubric_id == $rubric->id ? 'selected' : '' }}>
                        {{ $rubric->title }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Оновити новину</button>
    </form>
@endsection
