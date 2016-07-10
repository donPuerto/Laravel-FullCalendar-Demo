<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ServiceCall extends Model
{
    protected $table = "servicecalls";

    protected $fillable = [
        'sc_service_type',
        'sc_job_description',
        'sc_job_fault_tech',
        'sc_job_assign_tech',
        'sc_est_service_charge'
    ];

    public function jobschedules(){
        return $this->belongsTo(JobSchedule::class,'jobschedule_id', 'id');
    }

}
