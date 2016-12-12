<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUser extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {

    Schema::create('roles_users',function(Blueprint $table){
      $table->increments('id');
      $table->string('name',20);
    });

    Schema::create('users',function (Blueprint $table){

      $table->increments('id');
      $table->string('name');
      $table->string('username');
      $table->string('email')->unique();
      $table->string('password',60);
      $table->integer('role')->unsigned();
      $table->string('avatar_image',255);
      $table->rememberToken();
      $table->nullableTimestamps();
      $table->foreign('role')
      ->references('id')
      ->on('roles_users')
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
  Schema::dropIfExists('users');
  Schema::dropIfExists('roles_users');
}
}
