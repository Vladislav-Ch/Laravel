<?php
/**
 * Created by PhpStorm.
 * User: Vlad
 * Date: 18.02.2019
 * Time: 10:34
 */
?>
        <!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Автосервис</title>

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
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="logo">
                    <h3><span>CAR</span>RE</h3>
                    <p>Крупнейший автосервис</p>
                </div>
                <div class="email">
                    <h3>ПОЧТА</h3>
                    <p>companymail@sample.com</p>
                </div>
                <div class="hours">
                    <h3>ВРЕМЯ РАБОТЫ</h3>
                    <p>Tues - Sun 9.00 am - 7.00 pm</p>
                </div>
                <div class="number">
                    <p>ТЕЛЕФОН</p>
                    <h3>+7(999)999-99-99</h3>
                </div>
                <div class="header-icon">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-vk"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="main-menu">
    <div class="container">
        <div class="row">
            <div class="col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                <div class="menu">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#">Главная</a></li>
                        <li class="list-inline-item"><a href="#">Услуги</a></li>
                        <li class="list-inline-item"><a href="#">Отзывы</a></li>
                        <li class="list-inline-item"><a href="#">Наша команда</a></li>
                        <li class="list-inline-item"><a href="#">Контакты</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="menu-button">
                    @guest
                        <a href="{{ route('login') }}"><button class="btn">Вход</button></a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"><button class="btn">Регистрация</button></a>
                        @endif
                    @else
                        <ul class="nav">
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    Доброе пожаловать, {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    @if(Auth::user()->name == "admin")
                                        <a class="dropdown-item" href="{{ route('admin') }}">Админ панель</a>
                                    @else
                                        <a class="dropdown-item" href="#">Личный кабинет</a>
                                    @endif

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                        {{ __('Выйти') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        </ul>
                    @endguest
                </div>
            </div>
        </div>
    </div>
</div>
@yield('content')
<footer>
    <div class="container">
        <div class="row">
            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <div class="footer-logo">
                    <h3><span>CAR</span>RE</h3>
                    <p>Крупнейший автосервис</p>
                </div>
                <div class="footer-text">
                    <p>Мы гарантируем высокое качество всех проделанных работ. В автосервисе возможно выполнить работу любой сложности, а стоимость работ будет приятным удивлением для Вас!</p>
                </div>
                <div class="footer-icon">
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        <li class="list-inline-item"><a href="#"><i class="fab fa-vk"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <div class="footer-contact">
                    <h3>КОНТАКТЫ</h3>
                    <ul>
                        <li><i class="fas fa-phone"></i>+7(999)999-99-99</li>
                        <li><i class="fas fa-phone"></i>+7(999)999-99-99</li>
                        <li><i class="fas fa-phone"></i>+7(999)999-99-99</li>
                        <li><i class="fas fa-phone"></i>+7(999)999-99-99</li>
                        <li><i class="fas fa-phone"></i>+7(999)999-99-99</li>
                        <li><i class="fas fa-envelope"></i>companymail@sample.com</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
