<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Pelanggan;
use App\Models\Penjualan;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBarang = Barang::count();
        $totalPelanggan = Pelanggan::count();
        $totalPenjualan = Penjualan::count();
        
        return view('dashboard', compact(
            'totalBarang', 
            'totalPelanggan', 
            'totalPenjualan'
        ));
    }
}