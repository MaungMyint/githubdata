<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //
     protected $fillable = [
        'codeno','package_id', 'user_id' ,'date','time','amount', 'qty', 'bookinguser', 'bookingph', 'bookingemail', 'specialrequest','status'
    ];
    public function organizer($value='')
    {
    	return $this->belongsTo('App\Organizer');
    }
    public function venues($value='')
    {
    	return $this->belongsTo('App\Venue');
    }
    public function service($value='')
    {
    	return $this->belongsTo('App\Service');
    }
}
