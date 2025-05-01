<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Список рубрик</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container my-5">
    <h1 class="mb-4">Рубрики</h1>

    @forelse($rubrics as $rubric)
        <div class="card mb-3 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="/rubrics/{{ $rubric->id }}" class="text-decoration-none text-dark">
                        {{ $rubric->title }}
                    </a>
                </h5>
                <p class="text-muted mb-0">
                    Новин: <strong>{{$rubric->news->count()}}</strong>
                </p>
            </div>
        </div>
    @empty
        <div class="alert alert-info">Поки що рубрик немає.</div>
    @endforelse
</div>
</body>
</html>


