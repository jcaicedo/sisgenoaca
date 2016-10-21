<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistryPattern extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registry_pattern',function(Blueprint $table){

            $table->uuid('id_registry');

            $table->integer('id_pattern')
            ->unsigned();           

            $table->foreign('id_registry')
            ->references('id')
            ->on('registrooaca')
            ->onDelete('cascade');

            $table->foreign('id_pattern')
            ->references('id')
            ->on('patterns')
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
        Schema::dropIfExist('registry_pattern');
    }
}
