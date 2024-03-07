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
                "barang_kode" => "PD001",
                "barang_nama" => "Handphone",
                "harga_beli" => 1000000,
                "harga_jual" => 1200000
            ],
            [
                "barang_id" => 2,
                "kategori_id" => 2,
                "barang_kode" => "PD002",
                "barang_nama" => "Kemeja",
                "harga_beli" => 50000,
                "harga_jual" => 75000
            ],
            [
                "barang_id" => 3,
                "kategori_id" => 3,
                "barang_kode" => "PD003",
                "barang_nama" => "Beras",
                "harga_beli" => 5000,
                "harga_jual" => 7000
            ],
            [
                "barang_id" => 4,
                "kategori_id" => 1,
                "barang_kode" => "PD004",
                "barang_nama" => "Laptop",
                "harga_beli" => 5000000,
                "harga_jual" => 6000000
            ],
            [
                "barang_id" => 5,
                "kategori_id" => 2,
                "barang_kode" => "PD005",
                "barang_nama" => "Celana",
                "harga_beli" => 75000,
                "harga_jual" => 100000
            ],
            [
                "barang_id" => 6,
                "kategori_id" => 3,
                "barang_kode" => "PD006",
                "barang_nama" => "Daging Sapi",
                "harga_beli" => 100000,
                "harga_jual" => 125000
            ],
            [
                "barang_id" => 7,
                "kategori_id" => 2,
                "barang_kode" => "PD007",
                "barang_nama" => "Topi",
                "harga_beli" => 7000,
                "harga_jual" => 12000
            ],
        ];  
        DB::table('m_barang')->insert($data);
    }
}
