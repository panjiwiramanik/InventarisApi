<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRuangTable extends Migration
{

    public function up()
    {
        Schema::create('ruang', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nama_ruang', 100);
            $table->string('kode_ruang', 20);
            $table->string('keterangan', 225);
        });
    }

    public function down()
    {
        Schema::drop('ruang');
    }
}
