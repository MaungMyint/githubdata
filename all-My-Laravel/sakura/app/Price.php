<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Price extends Model
{
    //
     protected $fillable = [
        
         'product_id', 'price','qty', 
    ];

   public function product($value = '')
	{
		return $this->belongsTo('App\Product');
	}
}
