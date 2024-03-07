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
        $data=[
            [
                "stok_id" => 1,
                "barang_id" => 1,
                "user_id" => 3,
                "stok_tanggal" => "2023-11-14",
                "stok_jumlah" => 10
            ],
            [
                "stok_id" => 2,
                "barang_id" => 2,
                "user_id" => 4,
                "stok_tanggal" => "2023-11-15",
                "stok_jumlah" => 20
            ],
            [
                "stok_id" => 3,
                "barang_id" => 3,
                "user_id" => 3,
                "stok_tanggal" => "2023-11-16",
                "stok_jumlah" => 30
            ],
            [
                "stok_id" => 4,
                "barang_id" => 1,
                "user_id" => 3,
                "stok_tanggal" => "2023-11-17",
                "stok_jumlah" => -5
            ],
            [
                "stok_id" => 5,
                "barang_id" => 2,
                "user_id" => 4,
                "stok_tanggal" => "2023-11-18",
                "stok_jumlah" => -10
            ],
            [
                "stok_id" => 6,
                "barang_id" => 3,
                "user_id" => 3,
                "stok_tanggal" => "2023-11-19",
                "stok_jumlah" => -15
            ],
            [
                "stok_id" => 7,
                "barang_id" => 1,
                "user_id" => 3,
                "stok_tanggal" => "2023-11-20",
                "stok_jumlah" => 15
            ],
            [
                "stok_id" => 8,
                "barang_id" => 2,
                "user_id" => 3,
                "stok_tanggal" => "2023-11-21",
                "stok_jumlah" => 25
            ],
            [
                "stok_id" => 9,
                "barang_id" => 3,
                "user_id" => 3,
                "stok_tanggal" => "2023-11-22",
                "stok_jumlah" => 35
            ],
            [
                "stok_id" => 10,
                "barang_id" => 7,
                "user_id" => 4,
                "stok_tanggal" => "2023-11-23",
                "stok_jumlah" => 40
            ]
        ];
        DB::table('t_stok')->insert($data);
    }
}
