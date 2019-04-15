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
                    <div class="card-header">Список клиентов</div>
                    <div class="card-body">
                        <a href="{{ route('admin.clients.create') }}" class="btn btn-danger">Добавить</a>
                        <table class="table">
                            <tr>
                                <th>№</th>
                                <th>Фамилия</th>
                                <th>Имя</th>
                                <th>Отчество</th>
                                <th>Дата рождения</th>
                                <th>Прописка</th>
                                <th>Паспорт</th>
                                <th></th>
                            </tr>
                            @forelse($clients as $client)
                                <tr>
                                    <td>{{ $client->id }}</td>
                                    <td>{{ $client->surname }}</td>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->patronymic }}</td>
                                    <td>{{ $client->date_of_birth }}</td>
                                    <td>{{ $client->registration }}</td>
                                    <td>{{ $client->passport }}</td>
                                    <td><a href="{{ route('admin.clients.edit', $client->id) }}" class="btn btn-sm btn-info">Изменить</a></td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8">Нет записей</td>
                                </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection