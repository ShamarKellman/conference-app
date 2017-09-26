<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function(Blueprint $table){
           $table->increments('client_id');
           $table->string('contact_name', 100);
           $table->string('email')->unique();
           $table->string('password');
           $table->rememberToken();
           $table->string('organisation');
           $table->string('address1');
           $table->string('address2')->nullable();
           $table->string('city');
           $table->string('country');
           $table->string('organisation')->nullable();
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
        Schema::dropIfExists('clients');
    }
}
