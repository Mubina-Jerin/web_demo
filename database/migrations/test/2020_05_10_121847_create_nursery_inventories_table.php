<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNurseryInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nursery_inventories', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nursery_id');
            $table->string('inv_name');
            $table->enum('inv_type',
            ['Plant_inv', 'Material_inv','Soil_inv',
            'Pesticide_inv','Seed_inv']);
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
        Schema::dropIfExists('nursery_inventories');
    }
}
