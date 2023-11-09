<?php

namespace Database\Seeders;

use App\Models\Struktur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StrukturSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $strukturs = [
            [
                'gambar' => 'struktur.png',
            ]
        ];
        Struktur::query()->insert($strukturs);
    }
}
