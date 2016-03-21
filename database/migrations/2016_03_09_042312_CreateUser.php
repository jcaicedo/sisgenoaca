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
        Schema::create('users',function (Blueprint $table){

            $table->increments('id');
            $table->string('first_name')->required();
            $table->string('last_name')->required();
            $table->string('email')->unique()->required();
            $table->string('password')->required();
            $table->enum('rol',['admin','estudiante','profesor'])->default('profesor');
            $table->string('institucion')->required();
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
        //
    }
}
