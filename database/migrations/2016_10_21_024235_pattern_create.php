<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PatternCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('patterns',function(Blueprint $table){

        $table->increments('id');
        $table->string('name',50);
        $table->longText('description')->nullable();
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
       Schema::dropIfExist('patterns');
   }
}
