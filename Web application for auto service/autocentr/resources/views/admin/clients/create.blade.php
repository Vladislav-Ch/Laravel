@extends('layout.adminpanel')
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
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="card">
                    <div class="card-header">Добавить клиента</div>
                    <div class="card-body">
                        <form method="post" action="{{ route('admin.clients.store') }}">
                            @csrf

                            Фамилия:
                            <input type="text" name="surname" class="form-control">
                            <br>
                            Имя:
                            <input type="text" name="name" class="form-control">
                            <br>
                            Отчество:
                            <input type="text" name="patronymic" class="form-control">
                            <br>
                            Дата рождения:
                            <input type="date" name="date_of_birth" class="form-control">
                            <br>
                            Регистрация:
                            <input type="text" name="registration" class="form-control">
                            <br>
                            Паспорт:
                            <input type="text" name="passport" class="form-control">
                            <br>
                            <input type="submit" value="Добавить" class="btn-primary btn">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection