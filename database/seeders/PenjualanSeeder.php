<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $hdata = [
            ['penjualan_id' => 1, 'user_id' => 3, 'pembeli' => 'Budi Santoso', 'penjualan_kode' => 'PNJ-001', 'penjualan_tanggal' => '2024-03-01 09:23:00'],
            ['penjualan_id' => 2, 'user_id' => 3, 'pembeli' => 'Ana Sulistyaningrum', 'penjualan_kode' => 'PNJ-002', 'penjualan_tanggal' => '2024-03-01 09:23:00'],
            ['penjualan_id' => 3, 'user_id' => 3, 'pembeli' => 'Kevin Wijaya', 'penjualan_kode' => 'PNJ-003', 'penjualan_tanggal' => '2024-03-01 09:23:00'],
            ['penjualan_id' => 4, 'user_id' => 3, 'pembeli' => 'Sarah Amelia', 'penjualan_kode' => 'PNJ-004', 'penjualan_tanggal' => '2024-03-01 09:23:00'],
            ['penjualan_id' => 5, 'user_id' => 3, 'pembeli' => 'Muhammad Ali', 'penjualan_kode' => 'PNJ-005', 'penjualan_tanggal' => '2024-03-01 09:23:00'],
            ['penjualan_id' => 6, 'user_id' => 3, 'pembeli' => 'Rizky Pratama', 'penjualan_kode' => 'PNJ-006', 'penjualan_tanggal' => '2024-03-01 09:23:00'],
            ['penjualan_id' => 7, 'user_id' => 3, 'pembeli' => 'Dewi Lestari', 'penjualan_kode' => 'PNJ-007', 'penjualan_tanggal' => '2024-03-01 09:23:00'],
            ['penjualan_id' => 8, 'user_id' => 3, 'pembeli' => 'Rudi Hartono', 'penjualan_kode' => 'PNJ-008', 'penjualan_tanggal' => '2024-03-01 09:23:00'],
            ['penjualan_id' => 9, 'user_id' => 3, 'pembeli' => 'Siti Rahayu', 'penjualan_kode' => 'PNJ-009', 'penjualan_tanggal' => '2024-03-01 09:23:00'],
            ['penjualan_id' => 10, 'user_id' => 3, 'pembeli' => 'Bambang Sutrisno', 'penjualan_kode' => 'PNJ-010', 'penjualan_tanggal' => '2024-03-01 09:23:00'],
        ];
        DB::table("t_penjualan")->insert($hdata);
    }
}
