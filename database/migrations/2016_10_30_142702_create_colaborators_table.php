<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateColaboratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colaborators',function(Blueprint $table){
          $table->uuid('id_registry');
          $table->increments('id');
          $table->string('name',255);
          $table->string('lastname',255);
          $table->string('email',255);
          $table->string('organization',255);
          $table->string('typecontribution',255);
          $table->string('image_organization',255)->nullable();

          $table->foreign('id_registry')
          ->references('id')
          ->on('registrooaca')
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
         Schema::dropIfExists('colaborators');
    }
}
