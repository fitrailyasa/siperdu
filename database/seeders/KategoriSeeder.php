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
            ],
            [
                'nama' => 'Bahasa',
            ],
            [
                'nama' => 'Filsafat',
            ],
            [
                'nama' => 'Ilmu Murni',
            ],
            [
                'nama' => 'Karya Umum',
            ],
            [
                'nama' => 'Murni',
            ],
        ];
        Kategori::query()->insert($kategoris);
    }
}
