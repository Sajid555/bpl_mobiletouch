<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');

        
             $table->string('image')->nullable();
            $table->string('Weight');
            $table->string('OS');
            $table->string('SIM');
            $table->string('Protection');
            $table->string('Dimensions');
            $table->string('Primary');
            $table->string('Front');
            $table->string('Video');
            $table->string('Internal');
            $table->string('RAM');
            $table->string('Expandable');
            
            $table->string('Capacity');
            $table->string('Type');
            $table->string('Turbo');
            $table->string('Bluetooth');
            $table->string('NFC');
            $table->string('USB');
            $table->string('Variant');
            $table->string('Architecture');
            $table->string('Cores');
            $table->string('Frequency');
            $table->string('Make');
            $table->string('GPU');
            


            $table->decimal('price');

            $table->string('details');
             $table->string('realflash');   
            

            $table->string('G2');
 
            $table->string('G3');
             $table->string('G4');   
             $table->string('GPS');

            $table->string('Loudpeaker');

            $table->string('HeadPHones');

            $table->string('Fingerprint_sensor');

            $table->string('Infrared'); 


            $table->string('Proximity');


            $table->string('display_type');

            $table->string('Accelerometer');

            $table->string('Gyroscope');

            $table->string('Ambient_Light'); 

            $table->string('Touchscreen_type');

            $table->string('Pixel_Density');

            $table->string('Size');
             $table->string('Color_Reproduction');

            $table->string('Resolution'); 

            $table->string('Screen_to_body_percentage');

            
            $table->unsignedInteger('brand_id');

            $table->foreign('brand_id')->references('id')->on('brands');

            
             $table->unsignedInteger('cat_id');

             $table->foreign('cat_id')->references('id')->on('categories');
             $table->timestamps();
             
             $table->foreign('image_id')->references('id')->on('photos');
             $table->unsignedInteger('comment_id');
            $table->foreign('comment_id')->references('id')->on('comments');
             $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
