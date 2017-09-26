<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePresentationsSpeakersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('presentations_speakers', function(Blueprint $table){
           $table->integer('presentation_id')->unsigned();
           $table->integer('speaker_id')->unsigned();
           $table->enum('type', ['keynote', 'discussant']);
           $table->timestamps();
           
           $table->foreign('presentation_id')
                ->references('id')
                ->on('presentations')
                ->onDelete('cascade');
           
           $table->foreign('speaker_id')
                ->references('id')
                ->on('speakers')
                ->onDelete('cascade');
                
           $table->primary(['presentation_id', 'speaker_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('presentations_speakers');
    }
}
