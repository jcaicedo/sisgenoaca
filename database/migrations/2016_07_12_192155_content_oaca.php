<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ContentOaca extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
     Schema::create('content_oaca',function (Blueprint $table){

        $table->uuid('id');
        $table->longText('content');
        $table->integer('plantilla');
        $table->integer('user_id')->unsigned();
        $table->timestamps();

        $table->foreign('user_id')->references('id')->on('users');
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
