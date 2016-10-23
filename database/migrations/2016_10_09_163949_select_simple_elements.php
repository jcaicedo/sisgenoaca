<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SelectSimpleElements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('select_simple', function(Blueprint $table){
            $table->increments('id');
            $table->integer('id_element')
            ->unsigned()
            ->nullable();
            $table->string('content',500);
            $table->enum('type_response',['1','0'])
            ->nullable()
            ->default('0');
            $table->foreign('id_element')
            ->references('id')
            ->on('elements')
            ->onDelete('set null')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('select_simple');
    }
}
