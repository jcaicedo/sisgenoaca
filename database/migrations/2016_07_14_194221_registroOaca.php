<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class RegistroOaca extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('registro_oaca',function (Blueprint $table){
      $table->engine = 'InnoDB';
      $table->increments('id');
      $table->text('content_register');
      $table->integer('user_id')->unsigned();
      $table->longText('title_oaca')->required();
      $table->enum('status',['0','1','2'])->default('0');
      $table->string('plantilla')->nullable();
      $table->string('licencia')->nullable();
      $table->enum('type',['original','shared'])->default('original');
      $table->integer('register_parent')->unsigned()->nullable();
      $table->integer('pattern_id')->unsigned();
      $table->timestamps();

    });

    Schema::table('registro_oaca',function(Blueprint $table){

      $table->foreign('user_id')
      ->references('id')
      ->on('users')
      ->onDelete('cascade')
      ->onUpdate('cascade');

      $table->foreign('pattern_id')
      ->references('id')
      ->on('patterns')
      ->onDelete('cascade')
      ->onUpdate('cascade');

      $table->foreign('register_parent')
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
    Schema::dropIfExists('registro_oaca');
  }
}
