<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeminjamanTable extends Migration
{

    public function up()
    {
        Schema::create('peminjaman', function(Blueprint $table) {
            $table->increments('id');
            $table->datetime('tanggal_pinjam');
            $table->datetime('tanggal_kembali');
            $table->string('status_peminjaman', 50);
            $table->integer('id_pegawai')->unsigned();

            $table->foreign('id_pegawai')->references('id')->on('pegawai');
        });
    }

    public function down()
    {
        Schema::drop('peminjaman');
    }
}
