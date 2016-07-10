<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteContact extends Model
{
    protected $table = "sitecontacts";
    protected $fillable= [
        'site_contact_name',
        'site_contact_job_title',
        'site_contact_phone1',
        'site_contact_phone2',
        'site_contact_notes',
    ];

    public function jobschedules(){
        return $this->belongsTo(JobSchedule::class,'jobschedule_id', 'id');
    }
}
