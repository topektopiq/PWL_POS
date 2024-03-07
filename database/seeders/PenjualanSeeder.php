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
        $data = [
            [
                "penjualan_id" => 1,
                "user_id" => 3,
                "pembeli" => "Budi",
                "penjualan_kode" => "OR001",
                "penjualan_tanggal" => "2023-11-14"
            ],
            [
                "penjualan_id" => 2,
                "user_id" => 4,
                "pembeli" => "Ani",
                "penjualan_kode" => "OR002",
                "penjualan_tanggal" => "2023-11-15"
            ],
            [
                "penjualan_id" => 3,
                "user_id" => 3,
                "pembeli" => "Cici",
                "penjualan_kode" => "OR003",
                "penjualan_tanggal" => "2023-11-16"
            ],
            [
                "penjualan_id" => 4,
                "user_id" => 4,
                "pembeli" => "Deni",
                "penjualan_kode" => "OR004",
                "penjualan_tanggal" => "2023-11-17"
            ],
            [
                "penjualan_id" => 5,
                "user_id" => 3,
                "pembeli" => "Eko",
                "penjualan_kode" => "OR005",
                "penjualan_tanggal" => "2023-11-18"
            ],
            [
                "penjualan_id" => 6,
                "user_id" => 4,
                "pembeli" => "Fitri",
                "penjualan_kode" => "OR006",
                "penjualan_tanggal" => "2023-11-19"
            ],
            [
                "penjualan_id" => 7,
                "user_id" => 3,
                "pembeli" => "Gina",
                "penjualan_kode" => "OR007",
                "penjualan_tanggal" => "2023-11-20"
            ],
            [
                "penjualan_id" => 8,
                "user_id" => 4,
                "pembeli" => "Hadi",
                "penjualan_kode" => "OR008",
                "penjualan_tanggal" => "2023-11-21"
            ],
            [
                "penjualan_id" => 9,
                "user_id" => 3,
                "pembeli" => "Ika",
                "penjualan_kode" => "OR009",
                "penjualan_tanggal" => "2023-11-22"
            ],
            [
                "penjualan_id" => 10,
                "user_id" => 4,
                "pembeli" => "Joni",
                "penjualan_kode" => "OR010",
                "penjualan_tanggal" => "2023-11-23"
            ],
            [
                "penjualan_id" => 11,
                "user_id" => 3,
                "pembeli" => "Kiki",
                "penjualan_kode" => "OR011",
                "penjualan_tanggal" => "2023-11-24"
            ],
            [
                "penjualan_id" => 12,
                "user_id" => 4,
                "pembeli" => "Lala",
                "penjualan_kode" => "OR012",
                "penjualan_tanggal" => "2023-11-25"
            ]
        ];
        DB::table('t_penjualan')->insert($data);
    }
}
