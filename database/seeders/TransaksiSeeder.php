<?php

namespace Database\Seeders;

use App\Models\Peminjaman;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $transaksis = [
            [
                'kode_pinjam' => 'asd123', 
                'peminjam_id' => 2, 
                'petugas_pinjam' => 'Admin', 
                'petugas_kembali' => 'Admin', 
                'status' => 'Sedang Dipinjam', 
                'denda' => 5000, 
                'tanggal_pinjam' => '2023-01-01', 
                'tanggal_kembali' => '2023-01-06', 
                'tanggal_pengembalian' => '2023-01-04',
            ],
            [
                'kode_pinjam' => 'asd123', 
                'peminjam_id' => 3, 
                'petugas_pinjam' => 'Admin', 
                'petugas_kembali' => 'Admin', 
                'status' => 'Selesai', 
                'denda' => 0, 
                'tanggal_pinjam' => '2023-02-02', 
                'tanggal_kembali' => '2023-02-03', 
                'tanggal_pengembalian' => '2023-02-04',
            ]
        ];
        Peminjaman::query()->insert($transaksis);
    }
}
