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
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Сотрудники</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Бывшие сотрудники</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <div class="card">
                            <div class="card-header">Список рабочих</div>
                            <div class="card-body">
                                <a href="{{ route('admin.workers.create') }}" class="btn btn-danger">Добавить</a>
                                <table class="table">
                                    <tr>
                                        <th>№</th>
                                        <th>Фамилия</th>
                                        <th>Имя</th>
                                        <th>Отчество</th>
                                        <th>Должность</th>
                                        <th>Разряд</th>
                                        <th>Опыт работы</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    @forelse($workers as $worker)
                                        @if($worker->works == 1)
                                            <tr>
                                                <td>{{ $worker->id }}</td>
                                                <td>{{ $worker->surname }}</td>
                                                <td>{{ $worker->name }}</td>
                                                <td>{{ $worker->patronymic }}</td>
                                                <td>{{ $worker->specialty }}</td>
                                                <td>{{ $worker->rank }}</td>
                                                <td>{{ $worker->work_experience }}</td>
                                                <td><a href="{{ route('admin.workers.edit', $worker->id) }}" class="btn btn-sm btn-info">Изменить</a></td>
                                                <td>
                                                    <form action="{{ route('admin.workers.destroy', $worker->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="submit" class="btn btn-sm btn-danger" value="Уволить" />
                                                    </form>
                                                </td>
                                            </tr>

                                        @endif
                                    @empty
                                        <tr>
                                            <td colspan="8">Нет записей</td>
                                        </tr>
                                    @endforelse
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="card">
                            <div class="card-header">Список рабочих</div>
                            <div class="card-body">
                                <a href="{{ route('admin.workers.create') }}" class="btn btn-danger">Добавить</a>
                                <table class="table">
                                    <tr>
                                        <th>№</th>
                                        <th>Фамилия</th>
                                        <th>Имя</th>
                                        <th>Отчество</th>
                                        <th>Должность</th>
                                        <th>Разряд</th>
                                        <th>Опыт работы</th>
                                    </tr>
                                    @forelse($workers as $worker)
                                        @if($worker->works == 0)
                                            <tr>
                                                <td>{{ $worker->id }}</td>
                                                <td>{{ $worker->surname }}</td>
                                                <td>{{ $worker->name }}</td>
                                                <td>{{ $worker->patronymic }}</td>
                                                <td>{{ $worker->specialty }}</td>
                                                <td>{{ $worker->rank }}</td>
                                                <td>{{ $worker->work_experience }}</td>

                                            </tr>

                                        @endif
                                    @empty
                                        <tr>
                                            <td colspan="7">Нет записей</td>
                                        </tr>
                                    @endforelse
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection