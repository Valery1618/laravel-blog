<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Список новин</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container my-5">
    <h1 class="mb-4">Новини</h1>

    @forelse($news as $newsOne)
        <div class="card mb-3 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="/news/{{ $newsOne->id }}" class="text-decoration-none text-dark">
                        {{ $newsOne->title }}
                    </a>
                </h5>
                <p class="text-muted mb-0">
                    Автор: <strong>{{ $newsOne->author->name ?? 'Без автора' }}</strong> |
                    Рубрика: <strong>{{ $newsOne->rubric->title ?? 'Без рубрики' }}</strong>
                </p>
            </div>
        </div>
    @empty
        <div class="alert alert-info">Поки що новин немає.</div>
    @endforelse
</div>
</body>
</html>

