<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    protected $fillable = ['id_client', 'id_car', 'defect', 'start_date', 'end_date', 'id_worker'];

    static function GetAllOrders(){
        return $orders = DB::table('orders')
            ->join('clients', 'clients.id', '=', 'orders.id_client')
            ->join('cars', 'cars.id', '=', 'orders.id_car')
            ->join('workers', 'workers.id', '=', 'orders.id_worker')
            ->select('orders.id',
                'clients.surname as surname_cl',
                'clients.name as name_cl',
                'clients.patronymic as patronymic_cl',
                'cars.marka',
                'cars.gos_nomer',
                'defect',
                'start_date',
                'end_date',
                'workers.surname as surname_w',
                'workers.name as surname_w',
                'workers.patronymic as patronymic_w')
            ->get();

    }
}
