<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBukuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->date('tanggal');
            $table->string('sampul');
            $table->string('penulis');
            $table->string('tahun_terbit');
            $table->string('tempat_terbit');
            $table->integer('no_inventaris');
            $table->string('sumber_buku');
            $table->string('keterangan');
            $table->foreignId('penerbit_id');
            $table->foreignId('kategori_id');
            $table->foreignId('rak_id');
            $table->integer('stok');
            $table->integer('halaman');
            $table->double('tinggi');
            $table->string('ddc');
            $table->string('isbn');
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
        Schema::dropIfExists('buku');
    }
}
