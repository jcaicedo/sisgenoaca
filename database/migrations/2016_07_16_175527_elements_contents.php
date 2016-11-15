<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ElementsContents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('elements',function (Blueprint $table){

            $table->increments('id');
            $table->string('type_element');
            $table->longText('content')->nullable();
            $table->string('moment');
            $table->string('pattern_pedagogicaltechno')->nullable();
            $table->integer('position_order');
            $table->string('contentchild')->nullable();
            $table->uuid('register_id')->required();
            $table->foreign('register_id')
            ->references('id')
            ->on('registrooaca')
            ->onDelete('cascade')
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
        Schema::dropIfExists('elements');
    }
}
