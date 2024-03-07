<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array(
            [
              "kategori_id" => 1,
              "kategori_kode" => "K001",
              "kategori_nama" => "Elektronik"
            ],
            [
              "kategori_id" => 2,
              "kategori_kode" => "K002",
              "kategori_nama" => "Pakaian"
            ],
            [
              "kategori_id" => 3,
              "kategori_kode" => "K003",
              "kategori_nama" => "Makanan"
            ]
          );
          DB::table('m_kategori')->insert($data);
    }
}
