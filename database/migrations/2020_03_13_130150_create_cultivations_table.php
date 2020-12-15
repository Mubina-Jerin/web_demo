<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCultivationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cultivations', function (Blueprint $table) {

            $table->increments('id');
            $table->integer('plant_id');
            $table->integer('cultivation_id');
            $table->date('month_to_start');
            $table->date('month_to_end');
            $table->string('prefered_soil');
            $table->longtext('steps_of_cultivation');
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
        Schema::dropIfExists('cultivations');
    }
}
