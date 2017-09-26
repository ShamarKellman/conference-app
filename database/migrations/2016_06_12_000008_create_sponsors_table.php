<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSponsorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsors', function(Blueprint $table){
           $table->increments('id');
           $table->integer('conference_id')->unsigned();
           $table->string('name');
           $table->string('description')->nullable();
           $table->string('image_path')->nullable();
           $table->string('website')->nullable();
           $table->timestamps();
           
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
        Schema::dropIfExists('sponsors');
    }
}
