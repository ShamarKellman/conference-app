<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChatlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chatlogs', function(Blueprint $table){
           $table->increments('id');
           $table->integer('presentation_id')->unsigned();
           $table->integer('attendee_id')->unsigned();
           $table->string('message', 260);
           $table->timestamps();
           
           $table->foreign('presentation_id')
                ->references('id')
                ->on('presentations');
           
           $table->foreign('attendee_id')
                ->references('id')
                ->on('attendees');  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chatlogs');
    }
}
