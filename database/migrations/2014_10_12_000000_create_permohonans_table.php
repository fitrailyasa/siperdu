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
        Schema::create('permohonans', function (Blueprint $table) {
            $table->id();
            $table->string('nik_pemohon')->nullable();
            $table->string('nama_pemohon')->nullable();
            $table->string('jk_pemohon')->nullable();
            $table->string('tl_pemohon')->nullable();
            $table->string('tgl_pemohon')->nullable();
            $table->string('al_pemohon')->nullable();
            $table->string('hp_pemohon')->nullable();
            $table->string('email_pemohon')->nullable();
            $table->string('jab_pemohon')->nullable();
            $table->string('nama_perusahaan')->nullable();
            $table->string('al_perusahaan')->nullable();
            $table->string('hp_perusahaan')->nullable();
            $table->string('email_perusahaan')->nullable();
            $table->string('jum_op_perusahaan')->nullable();
            $table->string('akta')->nullable();
            $table->string('ktp')->nullable();
            $table->string('npwp')->nullable();
            $table->string('persetujuan')->nullable();
            $table->string('kepemilikan')->nullable();
            $table->string('permohonan')->nullable();
            $table->string('tdp')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down():void
    {
        Schema::dropIfExists('permohonans');
    }
};
