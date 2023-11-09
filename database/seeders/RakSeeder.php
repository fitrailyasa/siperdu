<?php

namespace Database\Seeders;

use App\Models\Rak;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $raks = [
            [
                'kode_rak' => '000',
                'nama_rak' => 'Rak 1',
            ],
            [
                'kode_rak' => '200',
                'nama_rak' => 'Rak 2',
            ],
            [
                'kode_rak' => '400',
                'nama_rak' => 'Rak 3',
            ],
            [
                'kode_rak' => '600',
                'nama_rak' => 'Rak 4',
            ],
            [
                'kode_rak' => '800',
                'nama_rak' => 'Rak 5',
            ]
        ];
        Rak::query()->insert($raks);
    }
}
