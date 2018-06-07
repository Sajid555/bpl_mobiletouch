<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable = [
        'id', 'image', 'Weight','OS', 'SIM', 'Protection','Dimensions', 'Primary', 'Front','Video', 'Internal', 'RAM','Expandable', 'Capacity', 'Weight','Type', 'Turbo', 'Bluetooth','NFC', 'USB', 'Variant','Architecture', 'Cores', 'Frequency','Make', 'GPU', 'price','details', 'realflash', 'G2','G3', 'G4', 'GPS','Loudpeaker', 'HeadPHones', 'Fingerprint_sensor','Infrared', 'Proximity', 'display_type','Accelerometer', 'Gyroscope', 'Ambient_Light','Touchscreen_type', 'Pixel_Density', 'Size','Resolution', 'Screen_to_body_percentage', 'Color_Reproduction','flipcart','drazpk','ebay','creaed_at','updated_at', 'image_id', 'brand_id', 'cat_id', 
    ];

    public static function filter($search_params){
    	return Product::where( function($sql) use($search_params){
    		if(isset($search_params['category']) && !empty($search_params['category'])){
    			$sql->whereIn('cat_id', $search_params['category']);
    		}
    		if(isset($search_params['price']) && !empty($search_params['price'])){
    			$price = explode("-", $search_params['price']);
    			$min_price = $price[0];
    			$max_price = $price[1];
    			$sql->whereBetween('price',array($min_price,$max_price));
    		}
    	})->paginate(18);
    }
}
