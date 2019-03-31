<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePegawaiTable extends Migration
{

    public function up()
    {
        Schema::create('pegawai', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nama_pegawai', 150);
            $table->string('nip', 20);
            $table->string('alamat', 225);
            $table->string('kode_unik', 225)->nullable();
        });
    }

    public function down()
    {
        Schema::drop('pegawai');
    }
}
