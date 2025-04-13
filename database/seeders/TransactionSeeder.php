<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Main sales data
        $penjualan = [
            [
                'penjualan_id' => 1,
                'user_id' => 1,
                'pembeli' => 'Budi Santoso',
                'penjualan_kode' => 'PJ001',
                'penjualan_tanggal' => '2024-02-24 09:00:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 2,
                'pembeli' => 'Siti Rahayu',
                'penjualan_kode' => 'PJ002',
                'penjualan_tanggal' => '2024-02-24 10:15:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 1,
                'pembeli' => 'Ahmad Hidayat',
                'penjualan_kode' => 'PJ003',
                'penjualan_tanggal' => '2024-02-24 11:30:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 2,
                'pembeli' => 'Dewi Kartika',
                'penjualan_kode' => 'PJ004',
                'penjualan_tanggal' => '2024-02-24 13:45:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 1,
                'pembeli' => 'Rudi Hartono',
                'penjualan_kode' => 'PJ005',
                'penjualan_tanggal' => '2024-02-24 14:20:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'penjualan_id' => 6,
                'user_id' => 2,
                'pembeli' => 'Nina Wijaya',
                'penjualan_kode' => 'PJ006',
                'penjualan_tanggal' => '2024-02-24 15:30:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'penjualan_id' => 7,
                'user_id' => 1,
                'pembeli' => 'Agus Purnomo',
                'penjualan_kode' => 'PJ007',
                'penjualan_tanggal' => '2024-02-24 16:45:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'penjualan_id' => 8,
                'user_id' => 2,
                'pembeli' => 'Maya Sari',
                'penjualan_kode' => 'PJ008',
                'penjualan_tanggal' => '2024-02-24 17:15:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'penjualan_id' => 9,
                'user_id' => 1,
                'pembeli' => 'Eko Prasetyo',
                'penjualan_kode' => 'PJ009',
                'penjualan_tanggal' => '2024-02-24 18:30:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'penjualan_id' => 10,
                'user_id' => 2,
                'pembeli' => 'Lina Susanti',
                'penjualan_kode' => 'PJ010',
                'penjualan_tanggal' => '2024-02-24 19:45:00',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        // Sales details data
        $penjualan_detail = [
            // Details for PJ001
            [
                'detail_id' => 1,
                'penjualan_id' => 1,
                'barang_id' => 1,
                'harga' => 2500,
                'jumlah' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'detail_id' => 2,
                'penjualan_id' => 1,
                'barang_id' => 3,
                'harga' => 3000,
                'jumlah' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'detail_id' => 3,
                'penjualan_id' => 1,
                'barang_id' => 5,
                'harga' => 5500,
                'jumlah' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Details for PJ002
            [
                'detail_id' => 4,
                'penjualan_id' => 2,
                'barang_id' => 2,
                'harga' => 12000,
                'jumlah' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'detail_id' => 5,
                'penjualan_id' => 2,
                'barang_id' => 4,
                'harga' => 5000,
                'jumlah' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'detail_id' => 6,
                'penjualan_id' => 2,
                'barang_id' => 6,
                'harga' => 7000,
                'jumlah' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Details for PJ003
            [
                'detail_id' => 7,
                'penjualan_id' => 3,
                'barang_id' => 7,
                'harga' => 20000,
                'jumlah' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'detail_id' => 8,
                'penjualan_id' => 3,
                'barang_id' => 8,
                'harga' => 35000,
                'jumlah' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'detail_id' => 9,
                'penjualan_id' => 3,
                'barang_id' => 9,
                'harga' => 10000,
                'jumlah' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Details for PJ004
            [
                'detail_id' => 10,
                'penjualan_id' => 4,
                'barang_id' => 1,
                'harga' => 2500,
                'jumlah' => 10,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'detail_id' => 11,
                'penjualan_id' => 4,
                'barang_id' => 2,
                'harga' => 12000,
                'jumlah' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'detail_id' => 12,
                'penjualan_id' => 4,
                'barang_id' => 3,
                'harga' => 3000,
                'jumlah' => 5,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Details for PJ005
            [
                'detail_id' => 13,
                'penjualan_id' => 5,
                'barang_id' => 4,
                'harga' => 5000,
                'jumlah' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'detail_id' => 14,
                'penjualan_id' => 5,
                'barang_id' => 5,
                'harga' => 5500,
                'jumlah' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'detail_id' => 15,
                'penjualan_id' => 5,
                'barang_id' => 6,
                'harga' => 7000,
                'jumlah' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Details for PJ006
            [
                'detail_id' => 16,
                'penjualan_id' => 6,
                'barang_id' => 7,
                'harga' => 20000,
                'jumlah' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'detail_id' => 17,
                'penjualan_id' => 6,
                'barang_id' => 8,
                'harga' => 35000,
                'jumlah' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'detail_id' => 18,
                'penjualan_id' => 6,
                'barang_id' => 9,
                'harga' => 10000,
                'jumlah' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Details for PJ007
            [
                'detail_id' => 19,
                'penjualan_id' => 7,
                'barang_id' => 10,
                'harga' => 15000,
                'jumlah' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'detail_id' => 20,
                'penjualan_id' => 7,
                'barang_id' => 1,
                'harga' => 2500,
                'jumlah' => 6,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'detail_id' => 21,
                'penjualan_id' => 7,
                'barang_id' => 2,
                'harga' => 12000,
                'jumlah' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Details for PJ008
            [
                'detail_id' => 22,
                'penjualan_id' => 8,
                'barang_id' => 3,
                'harga' => 3000,
                'jumlah' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'detail_id' => 23,
                'penjualan_id' => 8,
                'barang_id' => 4,
                'harga' => 5000,
                'jumlah' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'detail_id' => 24,
                'penjualan_id' => 8,
                'barang_id' => 5,
                'harga' => 5500,
                'jumlah' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Details for PJ009
            [
                'detail_id' => 25,
                'penjualan_id' => 9,
                'barang_id' => 6,
                'harga' => 7000,
                'jumlah' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'detail_id' => 26,
                'penjualan_id' => 9,
                'barang_id' => 7,
                'harga' => 20000,
                'jumlah' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'detail_id' => 27,
                'penjualan_id' => 9,
                'barang_id' => 8,
                'harga' => 35000,
                'jumlah' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],

            // Details for PJ010
            [
                'detail_id' => 28,
                'penjualan_id' => 10,
                'barang_id' => 9,
                'harga' => 10000,
                'jumlah' => 2,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'detail_id' => 29,
                'penjualan_id' => 10,
                'barang_id' => 10,
                'harga' => 15000,
                'jumlah' => 1,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'detail_id' => 30,
                'penjualan_id' => 10,
                'barang_id' => 1,
                'harga' => 2500,
                'jumlah' => 4,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];

        // Insert the data
        DB::table('t_penjualan')->insert($penjualan);
        DB::table('t_penjualan_detail')->insert($penjualan_detail);
    }
}