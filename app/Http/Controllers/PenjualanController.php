<?php

namespace App\Http\Controllers;

use App\Models\Penjualan;
use Illuminate\Http\Request;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataPenjualan = Penjualan::latest()->paginate(10);
        return view('penjualan.index', compact('dataPenjualan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('penjualan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'faktur_id' => 'required|max:6',
            'no_pelanggan' => 'required|max:6',
            'tanggal_penjualan' => 'date'

        ]);

        Penjualan::create($validasi);

        return redirect()->route('penjualan.index')
        ->with('succes', 'penjualan berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $penjualan = Penjualan::findOrFail($id);
        return view('penjualan.show', compact('penjualan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $penjualan = Penjualan::findOrFail($id);
        return view('penjualan.edit', compact('penjualan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasi = $request->validate([
            'faktur_id' => 'required|max:6',
            'no_pelanggan' => 'required|max:6',
            'tanggal_penjualan' => 'date'
        ]);

        $penjualan = Penjualan::findOrFail($id);
        $penjualan->update($validasi);

        return redirect()->route('penjualan.index')
            ->with('success', 'Penjualan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $penjualan = Penjualan::findOrFail($id);
        $penjualan->delete();
        
        return redirect()->route('penjualan.index')
            ->with('success', 'Penjualan berhasil dihapus');
    }
}
