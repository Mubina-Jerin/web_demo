<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
        Schema::create('blogs', function (Blueprint $table) {
           
            $table->increments('id');
            $table->string('blog_title');
            $table->string('blog_introduction');
            $table->string('blog_conclusion');
            $table->string('blog_body');
            $table->integer('user_id');
            $table->integer('resource_id');
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
        Schema::dropIfExists('blogs');
    }
}
