<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class JobSchedule extends Model
{
    public $table = "jobschedules";
    protected $fillable = [
        'job_order_number',
        'job_assign_color',
        'job_queue',
        'service_type',
        'technician',
        'job_description',
        'job_notes',
        'pre_job_sched_status',
        'job_sched_status',
        'est_job_time_sched',
        'job_site_address',
        'job_site_suburb',
        'job_site_postal_code',
        'job_site_country',
        'title',
        'start',
        'end'

    ];
    public function contacts(){
        return $this->belongsTo(Contact::class, 'contact_id', 'id');
    }
    public function payments(){
        return $this->hasOne(Payment::class,'jobschedule_id', 'id' );
    }

    public function sitecontacts(){
        return $this->hasOne(SiteContact::class,'jobschedule_id', 'id');
    }

    public function extrajobs(){
        return $this->hasOne(ExtraJob::class,'jobschedule_id', 'id');
    }

    public function servicecalls(){
        return $this->hasOne(ServiceCall::class,'jobschedule_id', 'id');
    }

}
