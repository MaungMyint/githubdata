<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //
     protected $fillable = [
     	'id',
		'name',
		'vacancy',
		'salary',
		'experience',
		'details',
		'qualifications',
		'location',
		'company_id',
		'category_id',          
          'enddate',
     ];

     public function category()
     {
     	return $this->belongsTo('App\Category');
     }
     public function employee()
     {
     	return $this->belongsTo('App\User','company_id');
     }
}
