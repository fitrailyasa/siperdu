<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategoris = [
            [
                'nama' => 'Agama',
                'gambar' => 'agama.png',
            ],
            [
                'nama' => 'Bahasa',
                'gambar' => 'bahasa.png',
            ],
            [
                'nama' => 'Filsafat',
                'gambar' => 'filsafat.png',
            ],
            [
                'nama' => 'Ilmu Murni',
                'gambar' => 'ilmu_murni.png',
            ],
            [
                'nama' => 'Karya Umum',
                'gambar' => 'karya_umum.png',
            ],
            [
                'nama' => 'Ilmu Sosial',
                'gambar' => 'ilmu_sosial.png',
            ],
            [
                'nama' => 'Sejarah',
                'gambar' => 'sejarah.png',
            ],
            [
                'nama' => 'Seni dan Olahraga',
                'gambar' => 'seni_olahraga.png',
            ],
        ];
        Kategori::query()->insert($kategoris);
    }
}
