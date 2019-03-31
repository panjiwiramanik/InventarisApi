<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetailPinjamTable extends Migration
{

    public function up()
    {
        Schema::create('detail_pinjam', function(Blueprint $table) {
            $table->increments('id');
            $table->integer('id_peminjaman')->unsigned();
            $table->integer('id_inventaris')->unsigned();
            $table->integer('jumlah')->unsigned();

            $table->foreign('id_peminjaman')->references('id')->on('peminjaman');
            $table->foreign('id_inventaris')->references('id')->on('inventaris');
        });
    }

    public function down()
    {
        Schema::drop('detail_pinjam');
    }
}
