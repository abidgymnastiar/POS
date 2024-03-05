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
            ['stok_id' => 1, 'barang_id' => 1, 'user_id' => 3, 'stok_tanggal' => '2024-03-01 08:40:00', 'stok_jumlah' => 80],
            ['stok_id' => 2, 'barang_id' => 2, 'user_id' => 3, 'stok_tanggal' => '2023-12-25 00:00:00', 'stok_jumlah' => 90],
            ['stok_id' => 3, 'barang_id' => 3, 'user_id' => 3, 'stok_tanggal' => '2025-01-01 00:00:00', 'stok_jumlah' => 50],
            ['stok_id' => 4, 'barang_id' => 4, 'user_id' => 3, 'stok_tanggal' => '2024-02-14 12:00:00', 'stok_jumlah' => 36],
            ['stok_id' => 5, 'barang_id' => 5, 'user_id' => 3, 'stok_tanggal' => '2024-07-17 17:50:00', 'stok_jumlah' => 75],
            ['stok_id' => 6, 'barang_id' => 6, 'user_id' => 3, 'stok_tanggal' => '2024-10-31 18:00:00', 'stok_jumlah' => 76],
            ['stok_id' => 7, 'barang_id' => 7, 'user_id' => 3, 'stok_tanggal' => '2024-05-20 15:00:00', 'stok_jumlah' => 89],
            ['stok_id' => 8, 'barang_id' => 8, 'user_id' => 3, 'stok_tanggal' => '2023-11-11 11:11:11', 'stok_jumlah' => 56],
            ['stok_id' => 9, 'barang_id' => 9, 'user_id' => 3, 'stok_tanggal' => '2025-06-06 06:06:06', 'stok_jumlah' => 99],
            ['stok_id' => 10, 'barang_id' => 10, 'user_id' => 3, 'stok_tanggal' => '2024-09-22 22:22:22', 'stok_jumlah' => 36],
        ];
        DB::table("t_stok")->insert($data);
    }
}
