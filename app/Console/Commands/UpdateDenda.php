<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Transaksi;
use Mockery\Generator\StringManipulation\Pass\Pass;

class UpdateDenda extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:denda';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        // Logika untuk mengupdate denda
        $transaksis = Transaksi::where('status', 'Sedang Dipinjam')->get();

        foreach ($transaksis as $transaksi) {
            $tanggalKembali = $transaksi->tanggal_kembali;
            $tanggalHariIni = now()->toDateString();

            // Hitung selisih hari
            $selisihHari = max(0, ceil((strtotime($tanggalHariIni) - strtotime($tanggalKembali)) / (60 * 60 * 24)));

            // Hitung denda
            $biayaDendaPerHari = 500; // Sesuaikan dengan kebutuhan Anda
            $denda = min($selisihHari * $biayaDendaPerHari, 5000); // Batasi denda maksimal menjadi 5000

            // Perbarui nilai denda di database
            $transaksi->update(['denda' => $denda]);
        }

        $this->info('Denda berhasil diperbaruii.');
    }
}
