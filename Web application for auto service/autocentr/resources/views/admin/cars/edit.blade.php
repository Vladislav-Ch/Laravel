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
                    <div class="card-header">Изменить услугу</div>
                    <div class="card-body">
                        <form method="post" action="{{ route('admin.cars.update', $cars->id) }}">
                            {{ method_field('PUT') }}
                            @csrf

                            <input type="text" name="marka" value="{{ $cars->marka }}" class="form-control">
                            <br>
                            <input type="text" name="color" value="{{ $cars->color }}" class="form-control">
                            <br>
                            <input type="text" name="year" value="{{ $cars->year }}" class="form-control">
                            <br>
                            <input type="text" name="gos_nomer" value="{{ $cars->gos_nomer }}" class="form-control">
                            <br>
                            <input type="submit" value="Сохранить" class="btn-primary btn">
                            <input type="submit" value="Отмена" class="btn-danger btn" href="{{ route('admin.cars.index') }}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection