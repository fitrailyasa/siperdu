<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bukus = [
            [
                'judul' => 'Komik 1', 
                'tanggal' => '2020-01-01', 
                'stok' => 20, 
                'sampul' => 'default.jpg', 
                'penulis' => 'Penulis 1', 
                'tahun_terbit' => 2020, 
                'tempat_terbit' => 'Tempat 1', 
                'halaman' => 20, 
                'tinggi' => 30, 
                'ddc' => 'DDC 1', 
                'isbn' => 'ISBN 1', 
                'sumber_buku' => 'Sumber 1', 
                'no_inventaris' => 10, 
                'keterangan' => 'Keterangan 1', 
                'kategori_id' => 1, 
                'rak_id' => 1, 
                'penerbit_id' => 1,
            ],
            [
                'judul' => 'Komik 2', 
                'tanggal' => '2020-02-02', 
                'stok' => 20, 
                'sampul' => 'default.jpg', 
                'penulis' => 'Penulis 2', 
                'tahun_terbit' => 2020, 
                'tempat_terbit' => 'Tempat 2', 
                'halaman' => 20, 
                'tinggi' => 30, 
                'ddc' => 'DDC 2', 
                'isbn' => 'ISBN 2', 
                'sumber_buku' => 'Sumber 2', 
                'no_inventaris' => 20, 
                'keterangan' => 'Keterangan 2', 
                'kategori_id' => 2, 
                'rak_id' => 2, 
                'penerbit_id' => 2,
            ]
        ];
        Buku::query()->insert($bukus);
    }
}
