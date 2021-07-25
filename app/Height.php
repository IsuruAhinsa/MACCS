<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Height extends Model
{
    protected $fillable = [
        'child_id', 'height',
    ];
}
