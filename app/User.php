<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
       'name', 'email', 'password','created_at','updated_at','remember_token',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public static $signup_rules = [
    'email' => 'required|unique:users',
    'password' => 'required',
    'name' => 'required',
    ];
    public static $login_rules = [
    'email' => 'required',
    'password' => 'required',
    ];
    public function is_admin()
    {
        if($this->admin)
        {

            return true;
        }
        return false;

    }
}
