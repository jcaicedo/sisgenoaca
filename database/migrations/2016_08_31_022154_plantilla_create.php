<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PlantillaCreate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plantillas',function(Blueprint $table){

            $table->increments('id');
            $table->integer('plantilla')->required();
            $table->integer('register_id')->unsigned()->required();
            $table->timestamps();
            $table->foreign('register_id')
            ->references('id')
            ->on('registro_oaca')
            ->onDelete('cascade')
            ->onUpdate('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plantillas');
    }
}
