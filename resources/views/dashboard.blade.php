<!DOCTYPE html>
<html lang="uk">
<head>
    <meta charset="UTF-8">
    <title>Адмінка</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            min-height: 100vh;
        }
        .sidebar {
            min-height: 100vh;
            background-color: #f8f9fa;
        }
        .sidebar a {
            display: block;
            padding: 10px 15px;
            color: #000;
            text-decoration: none;
        }
        .sidebar a:hover {
            background-color: #e2e6ea;
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-3 col-lg-2 d-md-block sidebar">
            <h4 class="p-3">Меню</h4>
            <a href="{{ url('/news') }}">Новини</a>
            <a href="{{ url('/authors') }}">Автори</a>
            <a href="{{ url('/rubrics') }}">Рубрики</a>
        </nav>

        <!-- Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
            <h2>Вітаємо в адмінці</h2>
            <p>Виберіть пункт зліва для перегляду або керування контентом.</p>
        </main>
    </div>
</div>
</body>
</html>
