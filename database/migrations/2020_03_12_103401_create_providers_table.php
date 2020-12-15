<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('providers', function (Blueprint $table) {
          
            $table->increments('id');
            $table->integer('phone_number');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('address');
            $table->boolean('is_broker');
            $table->boolean('is_sourcer');
            $table->integer('bloger_id');
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
        Schema::dropIfExists('providers');
    }
}
