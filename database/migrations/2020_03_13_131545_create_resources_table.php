<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResourcesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resources', function (Blueprint $table) {
        
            $table->increments('id');
            $table->char('img',100);
            $table->string('caption');
            $table->integer('customer_image_id')->nullable()->default(true);
            $table->integer('provider_image_id')->nullable()->default(true);
            $table->integer('plant_image_id')->nullable()->default(true);
            $table->integer('soil_image_id')->nullable()->default(true);
            $table->integer('seed_image_id')->nullable()->default(true);
            $table->integer('pesticide_image_id')->nullable()->default(true);
            $table->integer('material_image_id')->nullable()->default(true);
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
        Schema::dropIfExists('resources');
    }
}
