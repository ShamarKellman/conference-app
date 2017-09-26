<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConferencesAttendeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conferences_attendees', function(Blueprint $table){
           $table->integer('conference_id')->unsigned();
           $table->integer('attendee_id')->unsigned();
           $table->timestamps();
           
           $table->foreign('conference_id')
                ->references('id')
                ->on('conferences')
                ->onDelete('cascade');
           
           $table->foreign('attendee_id')
                ->references('id')
                ->on('attendees')
                ->onDelete('cascade');
                
           $table->primary(['conference_id', 'attendee_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conferences_attendees');
    }
}
