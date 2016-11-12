<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PublicsOacaTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {

    Schema::create('publics_oaca',function(Blueprint $table){

      $table->increments('id')->index();
      $table->uuid('register_id')->required();
      $table->enum('status',['0','1'])->default('0');
      $table->foreign('register_id')
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
    Schema::dropIfExists('publics_oaca');
  }
}
