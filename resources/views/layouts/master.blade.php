<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>Tasks | @yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark mb-5">
        <ul class="navbar-nav">
            <li class="nav-item mr-3"><a class="nav-link" href="{{ route('tasks.index') }}">Liste des tâches</a></li>
            <li class="nav-item mr-3"><a class="nav-link" href="{{ route('tasks.create') }}">Créer une tâche</a></li>
        </ul>
    </nav>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
