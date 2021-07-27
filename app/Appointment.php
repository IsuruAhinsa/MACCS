<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    /**
     * Get the owning bookable model.
     */
    public function bookable()
    {
        return $this->morphTo();
    }
}
