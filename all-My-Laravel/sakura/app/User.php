<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\UserDetail;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','password','role',
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


    const ADMIN_TYPE='admin';

    public function isAdmin()
    {
        return $this->type==self::ADMIN_TYPE;
    }
    const HEAD_TYPE='head';
    
    public function isHead()
    {
        return $this->type==self::HEAD_TYPE;
    }
    const AGENT_TYPE='agent';
    
    public function isAgent()
    {
        return $this->type==self::AGENT_TYPE;
    }

    public function userdetail($value = '')
    {
        return $this->hasOne('App\UserDetail');
    }

    public function orders($value = '')
    {
        return $this->hasMany('App\Order','agent_id');
    }

   
}
