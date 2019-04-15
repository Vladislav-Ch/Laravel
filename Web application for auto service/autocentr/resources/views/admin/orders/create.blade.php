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
                    <div class="card-header">Добавить заказ</div>
                    <div class="card-body">
                        <form method="post" action="{{ route('admin.orders.store') }}">
                            @csrf
                            Клиент:
                            <input type="text" id="client" readonly="" name="client" class="form-control">
                            <input type="hidden" id="id_client" name="id_client">
                            <br>
                            Машина:
                            <input type="text" id="car" readonly="" name="car" class="form-control">
                            <input type="hidden" id="id_car" name="id_car">
                            <br>
                            Услуги:
                            <input type="text" id="services" readonly="" name="defect" class="form-control">
                            <br>
                            Рабочий:
                            <input type="text" id="worker" readonly="" name="worker" class="form-control">
                            <input type="hidden" id="id_worker" name="id_worker">
                            <br>
                            Дата начала работ:
                            <input type="date" name="start_date" class="form-control">
                            <br>
                            Дата окончания работ:
                            <input type="date" name="end_date" class="form-control">
                            <br>
                            <input type="submit" value="Добавить" class="btn-primary btn">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#clients" role="tab" aria-controls="home" aria-selected="true">Клиент</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#cars" role="tab" aria-controls="profile" aria-selected="false">Машина</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#services1" role="tab" aria-controls="contact" aria-selected="false">Услуги</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#workers" role="tab" aria-controls="contact" aria-selected="false">Рабочий</a>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="clients" role="tabpanel" aria-labelledby="home-tab">
                        <div class="card">
                            <div class="card-header">Список клиентов</div>
                            <div class="card-body">
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
                                            <td><input class="btn btn-sm btn-primary" type="button" value="Выбрать" OnClick="get_client(this);" /></td>
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
                    <div class="tab-pane fade" id="cars" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="card">
                            <div class="card-header">Список машин</div>
                            <div class="card-body">
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
                                            <td><input class="btn btn-sm btn-primary" type="button" value="Выбрать" OnClick="get_car(this);" /></td>
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
                    <div class="tab-pane fade" id="services1" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="card">
                            <div class="card-header">Список услуг</div>
                            <div class="card-body">
                                <table class="table">
                                    <tr>
                                        <th>№</th>
                                        <th>Наименование услуги</th>
                                        <th></th>
                                    </tr>
                                    @forelse($services as $service)
                                        <tr>
                                            <td>{{ $service->id }}</td>
                                            <td>{{ $service->name }}</td>
                                            <td><input class="btn btn-sm btn-primary" type="button" value="Выбрать" OnClick="get_service(this);" /></td>
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
                    <div class="tab-pane fade" id="workers" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="card">
                            <div class="card-header">Список рабочих</div>
                            <div class="card-body">
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
                                        @if($worker->works == 1)
                                            <tr>
                                                <td>{{ $worker->id }}</td>
                                                <td>{{ $worker->surname }}</td>
                                                <td>{{ $worker->name }}</td>
                                                <td>{{ $worker->patronymic }}</td>
                                                <td>{{ $worker->specialty }}</td>
                                                <td>{{ $worker->rank }}</td>
                                                <td>{{ $worker->work_experience }}</td>
                                                <td><input class="btn btn-sm btn-primary" type="button" value="Выбрать" OnClick="get_worker(this);" /></td>
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
                </div>
            </div>
        </div>
    </div>
    <script>
        function get_worker(ths) {
            let tr = ths.parentNode.parentNode;
            let v_id = tr.getElementsByTagName("td")[0].innerHTML;
            let v1 = tr.getElementsByTagName("td")[1].innerHTML;
            let v2 = tr.getElementsByTagName("td")[2].innerHTML;
            let v3 = tr.getElementsByTagName("td")[3].innerHTML;
            document.getElementById('worker').value = v1 + " " + v2 + " " + v3;
            document.getElementById('id_worker').value = v_id;
        }

        function get_client(ths) {
            let tr = ths.parentNode.parentNode;
            let v_id = tr.getElementsByTagName("td")[0].innerHTML;
            let v1 = tr.getElementsByTagName("td")[1].innerHTML;
            let v2 = tr.getElementsByTagName("td")[2].innerHTML;
            let v3 = tr.getElementsByTagName("td")[3].innerHTML;
            document.getElementById('client').value = v1 + " " + v2 + " " + v3;
            document.getElementById('id_client').value = v_id;
        }

        function get_service(ths) {
            let tr = ths.parentNode.parentNode;
            let v1 = tr.getElementsByTagName("td")[1].innerHTML;
            document.getElementById('services').value = v1;
        }

        function get_car(ths) {
            let tr = ths.parentNode.parentNode;
            let v_id = tr.getElementsByTagName("td")[0].innerHTML;
            let v1 = tr.getElementsByTagName("td")[1].innerHTML;
            let v2 = tr.getElementsByTagName("td")[2].innerHTML;
            let v3 = tr.getElementsByTagName("td")[3].innerHTML;
            document.getElementById('car').value = v1 + " " + v2 + " " + v3;
            document.getElementById('id_car').value = v_id;
        }

    </script>

@endsection