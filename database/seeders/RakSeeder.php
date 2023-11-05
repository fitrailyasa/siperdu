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
                'rak' => '000',
                'baris' => '1',
                'kategori_id' => 1
            ],
            [
                'rak' => '000',
                'baris' => '2',
                'kategori_id' => 2
            ],
            [
                'rak' => '000',
                'baris' => '3',
                'kategori_id' => 3
            ],
            [
                'rak' => '000',
                'baris' => '4',
                'kategori_id' => 4
            ],
            [
                'rak' => '200',
                'baris' => '1',
                'kategori_id' => 1
            ],
            [
                'rak' => '200',
                'baris' => '2',
                'kategori_id' => 2
            ],
            [
                'rak' => '200',
                'baris' => '3',
                'kategori_id' => 3
            ],
            [
                'rak' => '200',
                'baris' => '4',
                'kategori_id' => 4
            ],
            [
                'rak' => '400',
                'baris' => '1',
                'kategori_id' => 1
            ],
            [
                'rak' => '400',
                'baris' => '2',
                'kategori_id' => 2
            ],
            [
                'rak' => '400',
                'baris' => '3',
                'kategori_id' => 3
            ],
            [
                'rak' => '400',
                'baris' => '4',
                'kategori_id' => 4
            ],
            [
                'rak' => '600',
                'baris' => '1',
                'kategori_id' => 1
            ],
            [
                'rak' => '600',
                'baris' => '2',
                'kategori_id' => 2
            ],
            [
                'rak' => '600',
                'baris' => '3',
                'kategori_id' => 3
            ],
            [
                'rak' => '600',
                'baris' => '4',
                'kategori_id' => 4
            ],
            [
                'rak' => '800',
                'baris' => '1',
                'kategori_id' => 1
            ],
            [
                'rak' => '800',
                'baris' => '2',
                'kategori_id' => 2
            ],
            [
                'rak' => '800',
                'baris' => '3',
                'kategori_id' => 3
            ],
            [
                'rak' => '800',
                'baris' => '4',
                'kategori_id' => 4
            ],
        ];
        Rak::query()->insert($raks);
    }
}
