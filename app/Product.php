<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

    protected $fillable = [
        'id', 'image', 'Weight', 'OS', 'SIM', 'Protection', 'Dimensions', 'Primary', 'Front', 'Video', 'Internal', 'RAM', 'Expandable', 'Capacity', 'Weight', 'Type', 'Turbo', 'Bluetooth', 'NFC', 'USB', 'Variant', 'Architecture', 'Cores', 'Frequency', 'Make', 'GPU', 'price', 'details', 'realflash', 'G2', 'G3', 'G4', 'GPS', 'Loudpeaker', 'HeadPHones', 'Fingerprint_sensor', 'Infrared', 'Proximity', 'display_type', 'Accelerometer', 'Gyroscope', 'Ambient_Light', 'Touchscreen_type', 'Pixel_Density', 'Size', 'Resolution', 'Screen_to_body_percentage', 'Color_Reproduction', 'flipcart', 'drazpk', 'ebay', 'creaed_at', 'updated_at', 'image_id', 'brand_id', 'cat_id',
    ];

    public static function filter($search_params) {
  
        return Product::where(function($sql) use($search_params) {
                    if (isset($search_params['brand']) && !empty($search_params['brand'])) {
                        $sql->whereIn('cat_id', $search_params['brand']);
                    }
                    if (isset($search_params['price']) && !empty($search_params['price'])) {
                        $price = explode("-", $search_params['price']);
                        $min_price = $price[0];
                        $max_price = $price[1];
                        $sql->whereBetween('price', array($min_price, $max_price));
                    }
                    if (isset($search_params['Capacity']) && !empty($search_params['Capacity'])) {
                        $Capacity = explode("-", $search_params['Capacity']);
                        $min_Capacity = $Capacity[0];
                        $max_Capacity = $Capacity[1];
                        $sql->whereBetween('Capacity', array($min_Capacity, $max_Capacity));
                    }
                    if (isset($search_params['Primary']) && !empty($search_params['Primary'])) {
                        $sql->where('Primary', '=', $search_params['Primary']);
                    }
                    if (isset($search_params['Front']) && !empty($search_params['Front'])) {
                        $sql->where('Front', '=', $search_params['Front']);
                    }
                    if (isset($search_params['Internal']) && !empty($search_params['Internal'])) {
                        $sql->where('Internal', '=', $search_params['Internal']);
                    }
                    if (isset($search_params['OS']) && !empty($search_params['OS'])) {
                        $sql->where('OS', '=', $search_params['OS']);
                    }
                    if (isset($search_params['display_type']) && !empty($search_params['display_type'])) {
                        $sql->where('display_type', '=', $search_params['display_type']);
                    }
                    if (isset($search_params['Resolution']) && !empty($search_params['Resolution'])) {
                        $sql->where('Resolution', '=', $search_params['Resolution']);
                    }
                    if (isset($search_params['RAM']) && !empty($search_params['RAM'])) {
                        $sql->where('RAM', '=', $search_params['RAM']);
                    }
                    if (isset($search_params['Protection']) && !empty($search_params['Protection'])) {
                        $sql->where('Protection', '=', $search_params['Protection']);
                    }
                })->paginate(18);
    }

}
