<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBandProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('band_profiles', function (Blueprint $table) {
            $table->id('profileID')->autoIncrement();
            $table->integer('userID');
            $table->integer('bandSize');
            $table->string('reper');
            $table->string('address');
            $table->string('bandName');
            $table->string('bio');
            $table->string('artistType');
            $table->string('genres');
            $table->string('exp');
            $table->string('youtube');
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
        Schema::dropIfExists('band_profiles');
    }
}
