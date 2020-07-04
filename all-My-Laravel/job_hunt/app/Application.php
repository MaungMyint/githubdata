<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    //
    protected $fillable = [
    	'id',
    	'seeker_id',
		'job_id',
		'company_id',
		'status',

    ];

     public function user()
     {
     	return $this->belongsTo('App\User','seeker_id');
     }
     public function seekerinfo()
     {
     	return $this->belongsTo('App\Seekerinfo','seeker_id');
     }

     public function job()
     {
     	return $this->belongsTo('App\Job','job_id');
     }

     public function seeker()
     {
        return $this->belongsTo('App\User','seeker_id');
     }
}
