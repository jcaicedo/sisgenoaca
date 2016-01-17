<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistroOaca extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registros',function(Blueprint $table){

            $table->increments('id');
            $table->string('nombreoaca')->required();
            $table->string('areaconocimiento')->required();
            $table->string('subareacnocimiento')->required();
            $table->string('idioma')->required();
            $table->string('origen')->required();
            $table->string('objetivogeneral')->required();
            $table->string('objetivoespecifico')->required();
            $table->string('contexto')->required();
            $table->string('audiencia')->required();
            $table->timestamp('fecha_creacion');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
