<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Immunization extends Model
{
    protected $table = 'immunizations';

    protected $fillable = [
        'child_id',
        'batch_no',
        'age',
        'type_of_vaccine',
        'date_of_vaccine',
        'adverse_effects_following_immunization',
        'bcg_scare',
    ];

    public static function vaccines(): array
    {
        return array(
            'bcg' => 'BCG',
            'other' => 'Other',
        );
    }
}
