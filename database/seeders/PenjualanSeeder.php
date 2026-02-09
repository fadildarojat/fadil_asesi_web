<?php

namespace Database\Seeders;

use App\Models\Penjualan;
use Illuminate\Database\Seeder;

class PenjualanSeeder extends Seeder
{
    public function run(): void
    {
        $dataPenjualan = [
            [
                'faktur_id' => '000001',
                'no_pelanggan' => '592332',
                'tanggal_penjualan' => '2026-02-05'
            ],
            [
                'faktur_id' => '000002',
                'no_pelanggan' => '5912132',
                'tanggal_penjualan' => '2026-02-06'
            ],
        ];
        
        foreach ($dataPenjualan as $penjualan) {
            Penjualan::create($penjualan);
        }
    }
}