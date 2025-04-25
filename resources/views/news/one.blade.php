<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>{{ $newsOne->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container my-5">
    <div class="card shadow-sm">
        <div class="card-body">
            <h1 class="card-title">{{ $newsOne->title }}</h1>
            <p class="text-muted mb-2">
                Автор: <strong>{{ $newsOne->author->name ?? 'Без автора' }}</strong> |
                Рубрика: <strong>{{ $newsOne->rubric->title ?? 'Без рубрики' }}</strong>
            </p>
            <hr>
            <div class="card-text">
                {!! nl2br(e($newsOne->content)) !!}
            </div>
            <a href="/news" class="btn btn-link mt-4">← Назад до списку новин</a>
        </div>
    </div>
</div>
</body>
</html>
