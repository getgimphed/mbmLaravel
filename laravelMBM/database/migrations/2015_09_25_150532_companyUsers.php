<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CompanyUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companyUsers', function (Blueprint $table) {
        // General 
        $table->increments('id');
        $table->string('compName');
        $table->string('compEmail')->unique();
        $table->string('hrMob');
        $table->string('password', 60);

        // Post Login Profile  Update
        $table->string('compUrl');
        $table->string('compAdd');
        $table->string('compCity');
        $table->string('hrName');
        $table->string('hrPhone');  // Alternate

        $table->rememberToken();    
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
        Schema::drop('companyUsers');
    }
}
