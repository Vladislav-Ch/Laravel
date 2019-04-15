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
                    <div class="card-header">Добавить машину</div>
                    <div class="card-body">
                        <form method="post" action="{{ route('admin.cars.store') }}">
                            @csrf

                            Марка:
                            <input type="text" name="marka" class="form-control">
                            <br>
                            Цвет:
                            <input type="text" name="color" class="form-control">
                            <br>
                            Год:
                            <input type="number" name="year" class="form-control">
                            <br>
                            Гос-номер:
                            <input type="text" name="gos_nomer" class="form-control">
                            <br>
                            <input type="submit" value="Добавить" class="btn-primary btn">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection