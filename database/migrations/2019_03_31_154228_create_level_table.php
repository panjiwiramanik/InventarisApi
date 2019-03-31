<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevelTable extends Migration
{

    public function up()
    {
        Schema::create('level', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nama_level', 100);
        });
    }

    public function down()
    {
        Schema::drop('level');
    }
}
