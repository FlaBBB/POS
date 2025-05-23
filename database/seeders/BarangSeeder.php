<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "barang_id" => 1,
                "kategori_id" => 1,
                "barang_kode" => "BRG001",
                "barang_nama" => "Mie Instan",
                "harga_beli" => 2000,
                "harga_jual" => 2500,
            ],
            [
                "barang_id" => 2,
                "kategori_id" => 1,
                "barang_kode" => "BRG002",
                "barang_nama" => "Telur",
                "harga_beli" => 9000,
                "harga_jual" => 11000,
            ],
            [
                "barang_id" => 3,
                "kategori_id" => 2,
                "barang_kode" => "BRG003",
                "barang_nama" => "Air Mineral",
                "harga_beli" => 2500,
                "harga_jual" => 3000,
            ],
            [
                "barang_id" => 4,
                "kategori_id" => 2,
                "barang_kode" => "BRG004",
                "barang_nama" => "Es Teh",
                "harga_beli" => 3000,
                "harga_jual" => 5000,
            ],
            [
                "barang_id" => 5,
                "kategori_id" => 3,
                "barang_kode" => "BRG005",
                "barang_nama" => "Keripik Kentang",
                "harga_beli" => 4000,
                "harga_jual" => 5500,
            ],
            [
                "barang_id" => 6,
                "kategori_id" => 3,
                "barang_kode" => "BRG006",
                "barang_nama" => "Kacang Goreng",
                "harga_beli" => 5000,
                "harga_jual" => 7000,
            ],
            [
                "barang_id" => 7,
                "kategori_id" => 4,
                "barang_kode" => "BRG007",
                "barang_nama" => "Piring Plastik",
                "harga_beli" => 15000,
                "harga_jual" => 20000,
            ],
            [
                "barang_id" => 8,
                "kategori_id" => 4,
                "barang_kode" => "BRG008",
                "barang_nama" => "Sendok Set",
                "harga_beli" => 25000,
                "harga_jual" => 35000,
            ],
            [
                "barang_id" => 9,
                "kategori_id" => 5,
                "barang_kode" => "BRG009",
                "barang_nama" => "Tissue",
                "harga_beli" => 8000,
                "harga_jual" => 10000,
            ],
            [
                "barang_id" => 10,
                "kategori_id" => 5,
                "barang_kode" => "BRG010",
                "barang_nama" => "Sabun Cuci",
                "harga_beli" => 12000,
                "harga_jual" => 15000,
            ],
        ];
        DB::table("m_barang")->insert($data);
    }
}