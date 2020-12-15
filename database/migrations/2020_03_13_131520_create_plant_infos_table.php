<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlantInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plant_infos', function (Blueprint $table) {
          
            $table->increments('id');
            $table->integer('inv_id');
            $table->string('plant_name');
            $table->string('plant_type');
            $table->string('prefered_season');
            $table->longText('plant_info');
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
        Schema::dropIfExists('plant_infos');
    }
}
