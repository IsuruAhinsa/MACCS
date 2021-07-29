<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Newborn extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'newborns';

    protected $fillable = [
        'child_id',
        'birthday',
        'apgar_score',
        'birth_weight',
        'birth_height',
        'birth_hcm',
        'skin',
        'eyes',
        'temperature',
        'notes',
    ];
}
