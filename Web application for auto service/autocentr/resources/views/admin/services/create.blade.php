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
                    <div class="card-header">Добавить услугу</div>
                    <div class="card-body">
                        <form method="post" action="{{ route('admin.services.store') }}">
                            @csrf
                            
                            Наименование услуги:
                            <input type="text" name="name" class="form-control">
                            <br>
                            <input type="submit" value="Добавить" class="btn-primary btn">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection