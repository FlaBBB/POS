<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'stok_id' => 1,
                'barang_id' => 1,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-24 08:00:00',
                'stok_jumlah' => 100,
            ],
            [
                'stok_id' => 2,
                'barang_id' => 2,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-24 08:30:00',
                'stok_jumlah' => 50,
            ],
            [
                'stok_id' => 3,
                'barang_id' => 3,
                'user_id' => 2,
                'stok_tanggal' => '2024-02-24 09:00:00',
                'stok_jumlah' => 200,
            ],
            [
                'stok_id' => 4,
                'barang_id' => 4,
                'user_id' => 2,
                'stok_tanggal' => '2024-02-24 09:30:00',
                'stok_jumlah' => 150,
            ],
            [
                'stok_id' => 5,
                'barang_id' => 5,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-24 10:00:00',
                'stok_jumlah' => 80,
            ],
            [
                'stok_id' => 6,
                'barang_id' => 6,
                'user_id' => 2,
                'stok_tanggal' => '2024-02-24 10:30:00',
                'stok_jumlah' => 120,
            ],
            [
                'stok_id' => 7,
                'barang_id' => 7,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-24 11:00:00',
                'stok_jumlah' => 30,
            ],
            [
                'stok_id' => 8,
                'barang_id' => 8,
                'user_id' => 2,
                'stok_tanggal' => '2024-02-24 11:30:00',
                'stok_jumlah' => 40,
            ],
            [
                'stok_id' => 9,
                'barang_id' => 9,
                'user_id' => 1,
                'stok_tanggal' => '2024-02-24 12:00:00',
                'stok_jumlah' => 160,
            ],
            [
                'stok_id' => 10,
                'barang_id' => 10,
                'user_id' => 2,
                'stok_tanggal' => '2024-02-24 12:30:00',
                'stok_jumlah' => 75,
            ],
        ];

        DB::table('t_stok')->insert($data);
    }
}