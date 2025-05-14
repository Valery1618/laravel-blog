<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Адмінка')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
{{-- Верхня навігація --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('dashboard') }}">Адмінка</a>

        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                {{-- Додаткові посилання можна додати сюди --}}
            </ul>
            @hasSection('add-button')
                @yield('add-button')
            @endif
        </div>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        {{-- Сайдбар --}}
        <nav class="col-md-2 bg-white shadow-sm p-3 min-vh-100">
            <h5 class="mb-3">Меню</h5>
            <ul class="nav flex-column">
                <li class="nav-item"><a href="{{ url('/news') }}" class="nav-link">Новини</a></li>
                <li class="nav-item"><a href="{{ url('/authors') }}" class="nav-link">Автори</a></li>
                <li class="nav-item"><a href="{{ url('/rubrics') }}" class="nav-link">Рубрики</a></li>
            </ul>
        </nav>

        {{-- Основна частина --}}
        <main class="col-md-10 p-4">
            <h1 class="mb-4">@yield('header', 'Панель керування')</h1>
            @yield('content')
        </main>
    </div>
</div>

@stack('scripts')
</body>
</html>
