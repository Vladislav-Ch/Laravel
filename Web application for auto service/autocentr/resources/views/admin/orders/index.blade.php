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
                    <div class="card-header">Список заказов</div>
                    <div class="card-body">
                        <a href="{{ route('admin.orders.create') }}" class="btn btn-danger">Добавить</a>
                        <table class="table">
                            <tr style="text-align: center">
                                <th>№</th>
                                <th>Клиент ФИО</th>
                                <th>Машина</th>
                                <th>Работы</th>
                                <th>Начало работ</th>
                                <th>Окончание работ</th>
                                <th>Рабочий ФИО</th>
                                <th></th>
                            </tr>
                            @forelse($orders as $order)
                                <tr style="text-align: center">
                                    <td>{{ $order->id }}</td>
                                    <td>{{ $order->surname_cl }} {{ $order->name_cl }} {{ $order->patronymic_cl }}</td>
                                    <td>{{ $order->marka }} {{ $order->gos_nomer }}</td>
                                    <td>{{ $order->defect }}</td>
                                    <td>{{ $order->start_date }}</td>
                                    <td>{{ $order->end_date }}</td>
                                    <td>{{ $order->surname_w }} {{ $order->surname_w }} {{ $order->patronymic_w }}</td>
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