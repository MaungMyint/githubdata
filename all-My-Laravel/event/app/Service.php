<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    //
     protected $fillable = [
        'name','image','description','price','organizer_id'
    ];
    public function organizer($value='')
    {
    	return $this->belongsTo('App\Organizer');
    }
}
