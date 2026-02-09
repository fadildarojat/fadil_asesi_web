<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    public function run(): void
    {
        $dataPelanggan = [
            [
                'no_pelanggan' => '592332',
                'nama_pelanggan' => 'Jakuy',
                'alamat' => 'perumahan GCI'
            ],
            [
                 'no_pelanggan' => '5912132',
                'nama_pelanggan' => 'Arjuy',
                'alamat' => 'Villa'
            ],
        ];
        
        foreach ($dataPelanggan as $pelanggan) {
            Pelanggan::create($pelanggan);
        }
    }
}