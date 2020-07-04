<?php

namespace App;
use App\Userdata;


use Illuminate\Database\Eloquent\Model;

class Userdata extends Model
{
    
    protected $fillable=['age','height','weight',];


public function latestBook()
    {
        return $this->hasOne('\App\Userdata')->latest();
    }
}