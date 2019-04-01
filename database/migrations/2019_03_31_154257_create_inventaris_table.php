<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInventarisTable extends Migration
{

    public function up()
    {
        Schema::create('inventaris', function(Blueprint $table) {
            $table->increments('id');
            $table->string('nama', 150);
            $table->string('kondisi', 150);
            $table->string('keterangan', 225);
            $table->integer('jumlah')->unsigned();
            $table->integer('id_jenis')->unsigned();
            $table->datetime('tanggal_register');
            $table->integer('id_ruang')->unsigned();
            $table->integer('id_petugas')->unsigned();
            $table->string('barcode', 225)->nullable();
            $table->text('image')->nullable();

            $table->foreign('id_jenis')->references('id')->on('jenis');
            $table->foreign('id_ruang')->references('id')->on('ruang');
            $table->foreign('id_petugas')->references('id')->on('petugas');
        });
    }

    public function down()
    {
        Schema::drop('inventaris');
    }
}
