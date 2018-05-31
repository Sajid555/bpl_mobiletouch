<?php
namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\client as Authenticatable;

class client extends Authenticatable
{
    use Notifiable;


     protected $fillable = [
       'name', 'email', 'password','created_at','updated_at',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


}