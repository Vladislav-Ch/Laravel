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
                    <div class="card-header">Изменить данные</div>
                    <div class="card-body">
                        <form method="post" action="{{ route('admin.clients.update', $clients->id) }}">
                            {{ method_field('PUT') }}
                            @csrf

                            <input type="text" name="surname" value="{{ $clients->surname }}" class="form-control">
                            <br>
                            <input type="text" name="name" value="{{ $clients->name }}" class="form-control">
                            <br>
                            <input type="text" name="patronymic" value="{{ $clients->patronymic }}" class="form-control">
                            <br>
                            <input type="date" name="date_of_birth" value="{{ $clients->date_of_birth }}" class="form-control">
                            <br>
                            <input type="text" name="registration" value="{{ $clients->registration }}" class="form-control">
                            <br>
                            <input type="text" name="passport" value="{{ $clients->passport }}" class="form-control">
                            <br>
                            <input type="submit" value="Сохранить" class="btn-primary btn">
                            <input type="submit" value="Отмена" class="btn-danger btn" href="{{ route('admin.clients.index') }}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection