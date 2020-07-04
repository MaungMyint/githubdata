<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
Use App\User;

class UserDetail extends Model
{
    //
     protected $fillable = [
        'name','email','head_id','nrc','phone','address','gender','user_id',
    ];

     public function user($value = '')
    {
        return $this->belongsTo('App\User');
    }
}
