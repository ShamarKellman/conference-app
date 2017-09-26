<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conferences', function(Blueprint $table){
           $table->increments('id');
           $table->integer('client_id')->unsigned();
           $table->string('name');
           $table->enum('type', ['public', 'private']);
           $table->string('description');
           $table->string('address1');
           $table->string('address2')->nullable();
           $table->string('city');
           $table->string('country');
           $table->dateTimeTz('start_time');
           $table->dateTimeTz('end_time');
           $table->timestamps();
           
           $table->foreign('client_id')
                ->references('id')
                ->on('clients');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conferences');
    }
}
