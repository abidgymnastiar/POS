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
            ['barang_id' => 1, 'kategori_id' => 1, 'barang_kode' => 'BRG-001', 'barang_nama' => 'kipas Angin', 'harga_beli' => 5000, 'harga_jual' => 6000],
            ['barang_id' => 2, 'kategori_id' => 2, 'barang_kode' => 'BRG-002', 'barang_nama' => 'Kemeja', 'harga_beli' => 9000, 'harga_jual' => 10000],
            ['barang_id' => 3, 'kategori_id' => 3, 'barang_kode' => 'BRG-003', 'barang_nama' => 'Mie', 'harga_beli' => 3000, 'harga_jual' => 4000],
            ['barang_id' => 4, 'kategori_id' => 4, 'barang_kode' => 'BRG-004', 'barang_nama' => 'Aqua', 'harga_beli' => 12000, 'harga_jual' => 13000],
            ['barang_id' => 5, 'kategori_id' => 5, 'barang_kode' => 'BRG-005', 'barang_nama' => 'Oli', 'harga_beli' => 80000, 'harga_jual' => 90000],
            ['barang_id' => 6, 'kategori_id' => 1, 'barang_kode' => 'BRG-006', 'barang_nama' => 'Televisi', 'harga_beli' => 100000, 'harga_jual' => 110000],
            ['barang_id' => 7, 'kategori_id' => 2, 'barang_kode' => 'BRG-007', 'barang_nama' => 'Celana', 'harga_beli' => 7000, 'harga_jual' => 8000],
            ['barang_id' => 8, 'kategori_id' => 3, 'barang_kode' => 'BRG-008', 'barang_nama' => 'Susu', 'harga_beli' => 15000, 'harga_jual' => 16000],
            ['barang_id' => 9, 'kategori_id' => 4, 'barang_kode' => 'BRG-009', 'barang_nama' => 'Teh', 'harga_beli' => 5000, 'harga_jual' => 6000],
            ['barang_id' => 10, 'kategori_id' => 5, 'barang_kode' => 'BRG-010', 'barang_nama' => 'Ban', 'harga_beli' => 200000, 'harga_jual' => 210000],
        ];
        DB::table("m_barang")->insert($data);
    }
}
