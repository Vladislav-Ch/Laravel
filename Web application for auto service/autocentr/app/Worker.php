<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    protected $fillable = ['surname', 'name', 'patronymic', 'specialty', 'rank', 'work_experience'];
}
