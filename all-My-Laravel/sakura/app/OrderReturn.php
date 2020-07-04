<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderReturn extends Model
{
    //
     protected $fillable = [
         'order_id', 'qty', 'return_date',
    ];

    public function order($value = '')
	{
		return $this->belongsTo('App\Order');
	}
}
