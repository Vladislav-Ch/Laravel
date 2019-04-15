<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Админ панель</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{!! asset("css/fonts.css") !!}">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Styles -->
    <link rel="stylesheet" href="{!! asset("css/app.css") !!}">
    <link rel="stylesheet" href="{!! asset("css/Style.css") !!}">

    <!-- Script -->
    <script src="{!! asset("js/jquery-3.2.1.min.js") !!}"></script>
    <script src="{!! asset("js/app.js") !!}"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">На сайт <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin') }}">Админ панель<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.services.index') }}">Услуги </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.cars.index') }}">Машины </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.orders.index') }}">Заказы </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.workers.index') }}">Рабочие </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('admin.clients.index') }}">Клиенты </a>
            </li>
        </ul>
    </div>
</nav>
@yield('content')
</body>
</html>