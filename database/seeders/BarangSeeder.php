<?php

namespace Database\Seeders;

use App\Models\Barang;
use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $dataBarang = [
            [
                'kode_barang' => '59932',
                'nama_barang' => 'Laptop Dell',
                'harga_barang' => 120000
            ],
            [
                'kode_barang' => '92882',
                'nama_barang' => 'Mouse Skull',
                'harga_barang' => 350000
            ],
        ];
        
        foreach ($dataBarang as $barang) {
            Barang::create($barang);
        }
    }
}