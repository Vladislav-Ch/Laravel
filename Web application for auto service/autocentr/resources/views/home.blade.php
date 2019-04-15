@extends('layout.master')
@section('content')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="banner">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{!! asset("img/home/banner-1.jpg") !!}" alt="First slide">
                    <div class="carousel-caption d-none d-md-block h-50">
                        <h5>Лучший сервис</h5>
                        <h5>для вашего автомобиля</h5>
                        <p>Мы предлагаем низкие цены и скидки до 30%</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{!! asset("img/home/banner-2.jpg") !!}" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block h-50">
                        <h5>Лучший сервис</h5>
                        <h5>для вашего автомобиля</h5>
                        <p>Мы предлагаем низкие цены и скидки до 30%</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{!! asset("img/home/banner-3.jpg") !!}" alt="Third slide">
                    <div class="carousel-caption d-none d-md-block h-50">
                        <h5>Лучший сервис</h5>
                        <h5>для вашего автомобиля</h5>
                        <p>Мы предлагаем низкие цены и скидки до 30%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="service">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-sm-12 col-lg-12 col-xl-12">
                    <div class="service-title">
                        <h5>Наши услуги</h5>
                        <p>Содержание автомобиля в хорошем состоянии имеет первостепенное значение для вашей безопасности. Вот почему наша команда из почти 500 профессиональных техников готова сделать ваш автомобиль безопасным</p>
                    </div>
                    <div class="service-collection">
                        @foreach($services as $service)
                            <div class="service-item">
                                <img src="{{ asset("img/service.png") }}" alt="">
                                <h3>{{ $service->name }}</h3>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="reviews">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-12 col-sm-12 col-lg-12 col-xl-12">
                    <div class="title">
                        <h3>Отзывы наших клиентов</h3>
                    </div>
                    <div id="carousel-reviews" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="icon"></div>
                                <div class="title">
                                    <h2>Имя Фамилия</h2>
                                    <p>г.Донецк</p>
                                </div>
                                <div class="text">
                                    <p>Тут будет текс отзыва</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="icon"></div>
                                <div class="title">
                                    <h2>Имя Фамилия</h2>
                                    <p>г.Донецк</p>
                                </div>
                                <div class="text">
                                    <p>Тут будет текс отзыва</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="icon"></div>
                                <div class="title">
                                    <h2>Имя Фамилия</h2>
                                    <p>г.Донецк</p>
                                </div>
                                <div class="text">
                                    <p>Тут будет текс отзыва</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-reviews" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-reviews" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection