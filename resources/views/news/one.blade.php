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
            <a href="{{route('news.showList')}}" class="btn btn-link mt-4">← До списку новин</a>
            <a href="{{ route('authors.loadOneAuthor', $newsOne->author->id) }}" class="btn btn-link mt-4">← До списку новин автора</a>
            <a href="/dashboard" class="btn btn-link mt-4">← Головна сторінка</a>
        </div>
    </div>
</div>
</body>
</html>
