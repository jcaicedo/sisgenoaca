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
    Schema::create('registrooaca',function (Blueprint $table){

      $table->uuid('id')->primary();
      $table->text('content_register');
      $table->integer('user_id')->unsigned();
      $table->longText('title_oaca')->required();
      $table->enum('status',['0','1','2'])->default('0');
      $table->string('plantilla')->nullable();
      $table->string('licencia')->nullable();
      $table->enum('type',['original','shared'])->default('original');
      $table->timestamps();
      $table->foreign('user_id')
      ->references('id')
      ->on('users')
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
    Schema::dropIfExists('registrooaca');
  }
}
