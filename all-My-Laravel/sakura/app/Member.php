<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\UserDetail;

class Member extends Model
{
    //
    protected $fillable = [
        'name','email','member_id','head_id','nrc','phone','address','gender','user_id',
    ];

     public function user($value = '')
    {
        return $this->belongsTo('App\User');
    }

    public function userdetail($value = '')
    {
        return $this->belongsTo('App\UserDetail');
    }
}
