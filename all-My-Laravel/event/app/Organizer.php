<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Organizer extends Model
{
    //
     protected $fillable = [
        'name','address','phoneno','description','email','image','category_id'
    ];
    public function category($value='')
    {
    	return $this->belongsTo('App\Category');
    }
}
