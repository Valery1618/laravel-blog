@extends('layouts.admin')

@section('title', 'Редагувати рубрику')
@section('header', 'Редагування рубрики')

@section('content')
    <form method="POST" action="{{ route('rubrics.updateRubric', $rubric->id) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Назва рубрики</label>
            <input type="text" class="form-control" id="name" name="title" value="{{old('title', $rubric->title)}}" required>
        </div>

        <button type="submit" class="btn btn-primary">Оновити рубрику</button>
    </form>
@endsection
