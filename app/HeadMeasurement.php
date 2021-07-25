<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeadMeasurement extends Model
{
    protected $fillable = [
        'child_id', 'head_circumference_measurements',
    ];
}
