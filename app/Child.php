<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    protected $fillable = [
        'first_name', 'last_name', 'birthday', 'date_of_registration', 'birth_weight', 'health_status'
    ];
}
