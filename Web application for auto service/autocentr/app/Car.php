<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['marka', 'color', 'year', 'gos_nomer'];
}
