<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
   //
	protected $table='categories';
	protected $fillable = ['id', 'image', 'cat_name'];
}
