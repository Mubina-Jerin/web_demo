<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddExtraFieldToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {

            $table->string('phone_number')->unique();
            $table->enum('user_type',['customer','provider','broker','admin']);
            $table->integer('role_id')->nullable();
                    
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('phone_number');
            $table->dropColumn('user_type');
            $table->dropColumn('role_id');
        });
    }
}
