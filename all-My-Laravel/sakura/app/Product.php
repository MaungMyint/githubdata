<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use  App\Category;



class Product extends Model
{
    //
    protected $fillable = [
        
         'product_name', 'price','image', 'category_id','product_desc',
    ];

    public function category($value = '')
	{
		return $this->belongsTo('App\Category');
	}
}
