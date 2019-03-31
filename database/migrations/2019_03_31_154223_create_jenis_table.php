<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJenisTable extends Migration
{

    public function up()
    {
        Schema::create('jenis', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nama_jenis', 100);
            $table->string('kode_jenis', 50);
            $table->string('keterangan', 225);
        });
    }

    public function down()
    {
        Schema::drop('jenis');
    }
}
