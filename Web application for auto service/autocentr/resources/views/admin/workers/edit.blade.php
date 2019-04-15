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
                        <form method="post" action="{{ route('admin.workers.update', $workers->id) }}">
                            {{ method_field('PUT') }}
                            @csrf

                            <input type="text" name="surname" value="{{ $workers->surname }}" class="form-control">
                            <br>
                            <input type="text" name="name" value="{{ $workers->name }}" class="form-control">
                            <br>
                            <input type="text" name="patronymic" value="{{ $workers->patronymic }}" class="form-control">
                            <br>
                            <input type="text" name="specialty" value="{{ $workers->specialty }}" class="form-control">
                            <br>
                            <input type="number" name="rank" value="{{ $workers->rank }}" class="form-control">
                            <br>
                            <input type="number" name="work_experience" value="{{ $workers->work_experience }}" class="form-control">
                            <br>
                            <input type="submit" value="Сохранить" class="btn-primary btn">
                            <input type="submit" value="Отмена" class="btn-danger btn" href="{{ route('admin.workers.index') }}">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection