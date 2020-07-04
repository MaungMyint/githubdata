<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'category_id','codeno', 'name', 'price','image','cost','qty',
    ];

    public function sale()
    {
    	return $this->belongsTo('App\Sale','item_codeno');
    }
}
