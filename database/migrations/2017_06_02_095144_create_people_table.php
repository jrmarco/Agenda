<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function(Blueprint $table){
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('nickname');
            $table->date('birthdate');
            $table->string('email');
            $table->integer('home');
            $table->integer('mobile');
            $table->integer('work');
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
        Schema::dropIfExists('people');    }
}
