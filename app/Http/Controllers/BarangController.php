<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataBarang = Barang::latest()->paginate(10);
        return view('barang.index', compact('dataBarang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'kode_barang' => 'required|min:0',
            'nama_barang' => 'required|max:50',
            'harga_barang' => 'required|numeric|min:0'

        ]);

        Barang::create($validasi);

        return redirect()->route('barang.index')
        ->with('succes', 'barang berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.show', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $barang = Barang::findOrFail($id);
        return view('barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $validasi = $request->validate([
            'kode_barang' => 'required|min:0',
            'nama_barang' => 'required|max:50',
            'harga_barang' => 'required|numeric|min:0'
         ]);

          $barang = Barang::findOrFail($id);
         $barang->update($validasi);
        
        return redirect()->route('barang.index')
            ->with('success', 'Barang berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $barang = Barang::findOrFail($id);
        $barang->delete();
        
        return redirect()->route('barang.index')
            ->with('success', 'Barang berhasil dihapus');
    }
}
