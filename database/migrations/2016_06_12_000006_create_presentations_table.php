<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresentationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presentations', function(Blueprint $table){
           $table->increments('id');
           $table->integer('room_id')->unsigned();
           $table->integer('conference_id')->unsigned();
           $table->string('title');
           $table->dateTime('start_time');
           $table->dateTime('end_time');
           $table->text('abstract');
           $table->text('keywords');
           $table->timestamps();
           
           $table->foreign('room_id')
                ->references('id')
                ->on('rooms');
           
           $table->foreign('conference_id')
                ->references('id')
                ->on('conferences');     
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presentations');
    }
}
