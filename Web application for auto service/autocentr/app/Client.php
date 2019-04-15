<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = ['surname', 'name', 'patronymic', 'date_of_birth', 'registration', 'passport'];
}
