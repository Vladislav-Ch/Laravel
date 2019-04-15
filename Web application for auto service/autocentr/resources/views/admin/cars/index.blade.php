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
                    <div class="card-header">Список машин</div>
                    <div class="card-body">
                        <a href="{{ route('admin.cars.create') }}" class="btn btn-danger">Добавить</a>
                        <table class="table">
                            <tr>
                                <th>№</th>
                                <th>Модель</th>
                                <th>Цвет</th>
                                <th>Год</th>
                                <th>Гос.номер</th>
                                <th></th>
                            </tr>
                            @forelse($cars as $car)
                                <tr>
                                    <td>{{ $car->id }}</td>
                                    <td>{{ $car->marka }}</td>
                                    <td>{{ $car->color }}</td>
                                    <td>{{ $car->year }}</td>
                                    <td>{{ $car->gos_nomer }}</td>
                                    <td><a href="{{ route('admin.cars.edit', $car->id) }}" class="btn btn-sm btn-info">Изменить</a></td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">Нет записей</td>
                                </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection