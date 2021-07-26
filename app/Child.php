<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'children';

    protected $fillable = [
        'first_name', 'last_name', 'birthday', 'date_of_registration', 'birth_weight', 'health_status'
    ];

    /**
     * Get the child's full name.
     *
     * @return string
     */
    public function getFullNameAttribute() {

        if (isset($this->first_name) && isset($this->last_name)) {
            return "{$this->first_name} {$this->last_name}";
        }

    }

    /**
     * Get the newborn record associated with the child.
     */
    public function newborn()
    {
        return $this->hasOne(Newborn::class, 'child_id');
    }
}
