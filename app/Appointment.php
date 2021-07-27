<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = [
        'date',
        'time',
        'venue',
        'reschedule_date',
        'reschedule_time',
        'reschedule_venue',
        'is_approve',
        'notes',
        'is_decline',
        'cancellation_reason'
    ];
}
