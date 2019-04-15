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
                    <div class="card-header">Список услуг</div>
                    <div class="card-body">
                        <a href="{{ route('admin.services.create') }}" class="btn btn-danger">Добавить</a>
                        <table class="table">
                            <tr>
                                <th>№</th>
                                <th>Наименование услуги</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @forelse($services as $service)
                                <tr>
                                    <td>{{ $service->id }}</td>
                                    <td>{{ $service->name }}</td>
                                    <td><a href="{{ route('admin.services.edit', $service->id) }}" class="btn btn-sm btn-info">Изменить</a></td>
                                    <td>
                                        <form action="{{ route('admin.services.destroy', $service->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <input type="submit" class="btn btn-danger btn-sm" value="Удалить">
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3">Нет записей</td>
                                </tr>
                            @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection