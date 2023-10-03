<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up():void
    {
        Schema::create('menaras', function (Blueprint $table) {
            $table->id();
            $table->string('site_id')->nullable();
            $table->string('pemilik')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('alamat')->nullable();
            $table->double('tinggi')->nullable();
            $table->string('tipe_zona')->nullable();
            $table->double('indeks_zona')->nullable();
            $table->string('jenis')->nullable();
            $table->double('indeks_jenis')->nullable();
            $table->bigInteger('tarif')->nullable();
            $table->bigInteger('rpmt')->nullable();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down():void
    {
        Schema::dropIfExists('menaras');
    }
};
