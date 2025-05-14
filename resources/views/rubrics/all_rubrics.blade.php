@extends('layouts.admin')

@section('title', 'Рубрики')
@section('header', 'Список рубрик')
@section('add-button')
    <a href="{{ route('rubrics.createRubric') }}" class="btn btn-outline-light">+ Додати рубрику</a>
@endsection

@section('content')
    @forelse($rubrics as $rubric)
        <div class="card mb-3">
            <div class="card-body">
                <h5><a href="{{ url('/rubrics/' . $rubric->id) }}">{{ $rubric->title }}</a></h5>
            </div>
        </div>
    @empty
        <div class="alert alert-info">Рубрик немає.</div>
    @endforelse
@endsection
