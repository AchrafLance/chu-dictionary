<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnToFlight extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('flights', function (Blueprint $table) {
            $table->string("fname"); 
            $table->string("lname"); 
            $table->string("photo"); 
            //
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('flight', function (Blueprint $table) {
            $table->dropColumn('fname'); 
            $table->dropColumn('lname'); 
            $table->dropColumn('photo'); 
        });
    }
}
