<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Oaca extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oaca',function(Blueprint $table){
            $table->uuid('id');
            $table->string('name')->required();
            $table->string('status')->nullable();
            $table->integer('user')->unsigned();
            $table->text('register')->required();
            $table->text('content')->nullable;
            $table->foreign('user')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->timestamps();
            $table->primary('id');



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
