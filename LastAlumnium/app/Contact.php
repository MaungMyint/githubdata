<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    
        protected $fillable = [
            'no','mname','name','nrc','degree','major','training','course','phonenumber','gmail', 'address',
        ];
    
       //protected $guarded =[];
    //    protected $fillable = [
    //     'no','mname','name','nrc','degree','major','training','course','phonenumber','gmail', 'address','university','staff','jobposition',
    //     'joblocation','salary',

    //];
}
