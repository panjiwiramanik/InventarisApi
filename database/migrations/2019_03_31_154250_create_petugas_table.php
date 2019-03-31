<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePetugasTable extends Migration
{

    public function up()
    {
        Schema::create('petugas', function(Blueprint $table) {
            $table->increments('id');
            $table->string('username', 150);
            $table->string('password', 225);
            $table->string('nama_petugas', 150);
            $table->integer('id_level')->unsigned();

             $table->foreign('id_level')->references('id')->on('level');
        });
    }

    public function down()
    {
        Schema::drop('petugas');
    }
}
