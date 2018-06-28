<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $fillable = [
        'id','name','email','comment','creaed_at', 'updated_at', 
    ];

}
