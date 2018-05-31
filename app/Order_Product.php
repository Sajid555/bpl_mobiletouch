<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Product extends Model {

    protected $table = 'order_products';
    protected $fillable = ['product_id', 'order_id'];

}
