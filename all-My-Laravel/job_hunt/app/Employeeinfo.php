<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employeeinfo extends Model
{
    //
    protected $fillable = [
     	'id',
		'user_id',
		'image',		
		'phoneno',
		'address',		
		'detail',		

    ];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
