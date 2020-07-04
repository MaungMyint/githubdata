<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name','email','email_verified_at','password','role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    const ADMIN_TYPE = 'admin';
    const DEFAULT_TYPE = 'Seeker';
    const COMPANY_TYPE = 'Employee';

    public function isAdmin(){
        return $this->role=== self::ADMIN_TYPE;
    }

    public function isEmployee(){
        return $this->role=== self::COMPANY_TYPE; 
    }

    public function isSeeker(){
        return $this->role=== self::DEFAULT_TYPE; 
    }

    public function employeeinfo()
    {
        return $this->hasOne('App\Employeeinfo');
    }
     public function seekerinfo()
    {
        return $this->hasOne('App\Seekerinfo');
    }

}
