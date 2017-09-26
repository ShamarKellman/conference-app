<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWhitelistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('whitelist', function(Blueprint $table){
           $table->increments('id');
           $table->integer('conference_id')->unsigned();
           $table->integer('attendee_id')->unsigned()->index()->nullable();
           $table->string('email');
           $table->string('token', 64);
           $table->enum('type', ['email', 'token']);
           $table->timestamps();
           
           $table->foreign('conference_id')
                ->references('id')
                ->on('conferences');
           
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
        Schema::dropIfExists('whitelist');
    }
}
