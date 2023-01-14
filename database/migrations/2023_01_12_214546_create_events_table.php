<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id('eventID')->autoIncrement();
            $table->integer('userID');
            $table->integer('artistID');
            $table->string('eventname');
            $table->string('eventdate');
            $table->string('addinfo');
            $table->string('location');
            $table->string('fromTime');
            $table->string('toTime');
            $table->string('services');
            $table->integer('status');
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
        Schema::dropIfExists('events');
    }
}
