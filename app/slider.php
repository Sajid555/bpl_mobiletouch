<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
      protected $fillable = [
       'id', 'image1', 'image2','image3','created_at','updated_at','remember_token',

    ];
}
