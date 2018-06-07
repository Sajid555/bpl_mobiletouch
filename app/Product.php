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
            if(isset($search_params['Capacity']) && !empty($search_params['Capacity'])){
                $Capacity = explode("-", $search_params['Capacity']);
                $min_Capacity = $Capacity[0];
                $max_Capacity = $Capacity[1];
                $sql->whereBetween('Capacity',array($min_Capacity,$max_Capacity));
            }
            if(isset($search_params['Primary']) && !empty($search_params['Primary'])){
                $Capacity = explode("-", $search_params['Primary']);
                $min_Capacity = $Capacity[0];
                $max_Capacity = $Capacity[1];
                $sql->whereBetween('Primary',array($min_Capacity,$max_Capacity));
            }
            if(isset($search_params['Front'])&& !empty($search_params['Front'])){
                $Front=explode("-", $search_params['Front']);
                $min_Front=$Front[0];
                $max_Front=$Front[1];
                $sql->whereBetween('Front',array($min_Front,$max_Front));
            }
             if(isset($search_params['Internal'])&& !empty($search_params['Internal'])){
                $Internal=explode("-", $search_params['Internal']);
                $min_Front=$Internal[0];
                $max_Front=$Internal[1];
                $sql->whereBetween('Internal',array($min_Front,$max_Front));
            }
            if(isset($search_params['OS'])&& !empty($search_params['OS'])){
                $OS=explode("-", $search_params['OS']);
                $min_Front=$OS[0];
                $max_Front=$OS[1];
                $sql->whereBetween('OS',array($min_Front,$max_Front));
            }
    	})->paginate(18);
    }
    
}
