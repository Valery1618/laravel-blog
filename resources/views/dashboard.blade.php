@extends('layouts.admin')

@section('title', 'Адмін-панель')
@section('header', 'Панель керування')

@section('content')
    <div class="mb-4">
        <a href="{{ url('/news') }}" class="btn btn-primary">Список новин</a>
        <a href="{{ url('/authors') }}" class="btn btn-secondary">Список авторів</a>
        <a href="{{ url('/rubrics') }}" class="btn btn-info">Список рубрик</a>
    </div>

    <p>Ласкаво просимо до адмін-панелі! Оберіть розділ для перегляду або редагування контенту.</p>
@endsection
