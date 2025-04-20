<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_id' => 1,
                'supplier_kode' => 'SP001',
                'supplier_nama' => 'PT Maju Mundur',
                'supplier_alamat' => 'Jl. Maju No. 123, Jakarta',
            ],
            [
                'supplier_id' => 2,
                'supplier_kode' => 'SP002',
                'supplier_nama' => 'PT Garuda Indonesia',
                'supplier_alamat' => 'Jl. Garuda No. 456, Surabaya',
            ],
            [
                'supplier_id' => 3,
                'supplier_kode' => 'SP003',
                'supplier_nama' => 'PT Ikan Bakar',
                'supplier_alamat' => 'Jl. Ikan No. 789, Bandung',
            ],
        ];

        DB::table('m_supplier')->insert($data);
    }
}
