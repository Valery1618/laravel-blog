<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Список авторів</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container my-5">
    <h1 class="mb-4">Автори</h1>

    @forelse($authors as $author)
        <div class="card mb-3 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="/authors/{{ $author->id }}" class="text-decoration-none text-dark">
                        {{ $author->name }}
                    </a>
                </h5>
                <p class="text-muted mb-0">
                    Новин: <strong>{{$author->news->count()}}</strong>
                </p>
            </div>
        </div>
    @empty
        <div class="alert alert-info">Поки що авторів немає.</div>
    @endforelse
</div>
</body>
</html>

