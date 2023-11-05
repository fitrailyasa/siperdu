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
                'judul' => 'asd', 
                'tanggal' => '2020-01-01', 
                'stok' => 20, 
                'sampul' => 'default.jpg', 
                'slug' => 'asd', 
                'penulis' => 'asd', 
                'tahun_terbit' => 2020, 
                'tempat_terbit' => 'asd', 
                'halaman' => 20, 
                'tinggi' => 30, 
                'ddc' => 'asd', 
                'isbn' => 'asd', 
                'sumber_buku' => 'asd', 
                'no_inventaris' => 10, 
                'keterangan' => 'asd', 
                'kategori_id' => 1, 
                'rak_id' => 1, 
                'penerbit_id' => 1,
            ]
        ];
        Buku::query()->insert($bukus);
    }
}
