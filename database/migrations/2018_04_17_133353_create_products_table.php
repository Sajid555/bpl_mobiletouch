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
            $table->string('product_name');
            $table->string('price');
            $table->text('details');
            $table->string('productImage')->nullable();
            
            $table->unsignedInteger('cat_id');

            $table->foreign('cat_id')->references('id')->on('categories');

            $table->unsignedInteger('brand_id');

            $table->foreign('brand_id')->references('id')->on('brands');

            $table->unsignedInteger('model_id');

            $table->foreign('model_id')->references('id')->on('models');
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
