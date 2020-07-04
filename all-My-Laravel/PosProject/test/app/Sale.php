<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = [
        'item_codeno','qty', 'receipt_voucher_no'
    ];

    public function item()
    {
    	return $this->hasMany('App\Item','codeno');
    }
}
