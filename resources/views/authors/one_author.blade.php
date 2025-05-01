<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Новини автора</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container my-5">
    <h1 class="mb-4">Новини автора: {{ $author->name }}</h1>

    @forelse($author->news as $newsOne)
        <div class="card mb-3 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="{{ url('/news/' . $newsOne->id) }}" class="text-decoration-none text-dark">
                        {{ $newsOne->title }}
                    </a>
                </h5>
                <p class="text-muted">
                    Рубрика: <strong>{{ $newsOne->rubric->title ?? 'Без рубрики' }}</strong>
                </p>
            </div>
        </div>
    @empty
        <div class="alert alert-info">У цього автора ще немає новин.</div>
    @endforelse

    <a href="/authors" class="btn btn-link mt-4">← До списку авторів</a>
    <a href="/dashboard" class="btn btn-link mt-4">← Головна сторінка</a>
</div>
</body>
</html>
