<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    //
    protected $fillable = [
         'head_id', 'agent_id', 'product_id', 'order_date', 'qty','price','total_price'
    ];

   	public function product($value = '')
	{
		return $this->belongsTo('App\Product');
	}

	public function orderReturn($value = '')
	{
		return $this->hasMany('App\OrderReturn');
	}

	
   
}
