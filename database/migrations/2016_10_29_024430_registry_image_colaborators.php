<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RegistryImageColaborators extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registry_image_colaborators',function(Blueprint $table){
          $table->uuid('id_registry');

          $table->integer('id_image_colaborator')
          ->unsigned()
          ->nullable();

          $table->foreign('id_registry')
          ->references('id')
          ->on('registrooaca')
          ->onDelete('cascade')
          ->onUpdate('cascade');

          $table->foreign('id_image_colaborator')
          ->references('id')
          ->on('image_colaborators')
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
         Schema::dropIfExists('registry_image_colaborators');
    }
}
