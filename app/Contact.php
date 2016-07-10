<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    protected $fillable = [
        'name',
        'address',
        'phone',
        'email'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function jobschedules(){
        return $this->hasMany(JobSchedule::class, 'contact_id', 'id');
    }
}
