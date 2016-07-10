<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExtraJob extends Model
{
    protected $table = "extrajobs";
    protected $fillable = [
        'extra_service_type',
        'extra_job_description',
        'extra_job_assign_tech',
        'extra_payment_type',
        'extra_payment_status',
        'extra_job_total_payment'

    ];

    public function jobschedules(){
        return $this->belongsTo(JobSchedule::class,'jobschedule_id', 'id');
    }
}
