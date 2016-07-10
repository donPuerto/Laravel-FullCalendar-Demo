<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = "payments";
    protected $fillable = [
        'payment_type',
        'payment_status',
        'estimated_charge',
        'actual_charge',
        'initial_deposit',
        'collectible_amount',
        'payment_description',

    ];
    public function jobschedules(){
        return $this->belongsTo(JobSchedule::class,'jobschedule_id', 'id');
    }
}
