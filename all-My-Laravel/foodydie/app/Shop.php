<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Shop extends Model
{
    protected $fillable = [
        'name', 'image', 'phone','open','odate','close','category_id',
    ];
    public function category($value='')
    {
    	return $this->belongsTo('App\Category');
    }
    public function user($value=''){
	return $this->belongsto('App\User');
}
}
