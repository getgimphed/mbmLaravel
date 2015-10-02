<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Jaf extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jaf', function (Blueprint $table) {
        /// jaf
        
        // About Job 
        $table->increments('id');
        $table->text('compOver');
        $table->text('jobDesc'); // include payscale per post Designations .. gross salary
        $table->string('cityPost');
        $table->string('accom');
        $table->boolean('bond'); // default 0
        $table->string('cutOff');

        // Selection Procedure
        $table->text('selPro');

        // Departments open for // Show Available Departments and ask to Mention the Departments 
        $table->string('openFor');
        // view is same as previous jaf checkbox
        // MEC/4-ECC/5-ITE/5
        $table->integer('compUser_id')->unsigned()->unique();
        $table->rememberToken();    
        $table->timestamps();
        
        // jafKey points to jaf
         $table->foreign('compUser_id')
                  ->references('id')
                  ->on('companyUsers')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('jaf');
    }
}
