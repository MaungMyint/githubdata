<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    //
     protected $fillable = [
        'name','image','organizer_id','service_id','venues_id','category_id','price'
    ];
    public function category($value='')
    {
    	return $this->belongsTo('App\Category');
    }
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
