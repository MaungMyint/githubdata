<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seekerinfo extends Model
{
    //
     protected $fillable = [
     	'id',
		'user_id',
		'image',		
		'phoneno',
		'address',		
		'detail',
		'cvform',
		

     ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
