<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     protected $fillable = [
        'id', 'image', 'Weight','OS', 'SIM', 'Protection','Dimensions', 'Primary', 'Front','Video', 'Internal', 'RAM','Expandable', 'Capacity', 'Weight','Type', 'Turbo', 'Bluetooth','NFC', 'USB', 'Variant','Architecture', 'Cores', 'Frequency','Make', 'GPU', 'price','details', 'realflash', 'G2','G3', 'G4', 'GPS','Loudpeaker', 'HeadPHones', 'Fingerprint_sensor','Infrared', 'Proximity', 'display_type','Accelerometer', 'Gyroscope', 'Ambient_Light','Touchscreen_type', 'Pixel_Density', 'Size','Resolution', 'Screen_to_body_percentage', 'Color_Reproduction','flipcart','drazpk','ebay'
    ];
}
