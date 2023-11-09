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
            $table->string('judul')->nullable();
            $table->date('tanggal')->nullable();
            $table->string('sampul')->nullable();
            $table->string('penulis')->nullable();
            $table->string('tahun_terbit')->nullable();
            $table->string('tempat_terbit')->nullable();
            $table->string('sumber_buku')->nullable();
            $table->string('keterangan')->nullable();
            $table->string('penerbit_id')->nullable();
            $table->foreignId('kategori_id')->nullable();
            $table->string('rak_id')->nullable();
            $table->integer('stok')->nullable();
            $table->integer('halaman')->nullable();
            $table->string('tinggi')->nullable();
            $table->string('ddc')->nullable();
            $table->string('isbn')->nullable();
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
