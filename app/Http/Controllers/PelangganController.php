<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataPelanggan = Pelanggan::latest()->paginate(10);
        return view('pelanggan.index', compact('dataPelanggan'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pelanggan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'no_pelanggan' => 'required|min:0',
            'nama_pelanggan' => 'required|max:50',
            'alamat' => 'required|max:100'

        ]);

        Pelanggan::create($validasi);

        return redirect()->route('pelanggan.index')
        ->with('succes', 'pelanggan berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.show', compact('pelanggan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('pelanggan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         $validasi = $request->validate([
            'no_pelanggan' => 'required|min:0',
            'nama_pelanggan' => 'required|max:50',
            'alamat' => 'required|max:100'
         ]);

          $pelanggan = Pelanggan::findOrFail($id);
         $pelanggan->update($validasi);
        
        return redirect()->route('pelanggan.index')
            ->with('success', 'Pelanggan berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();
        
        return redirect()->route('pelanggan.index')
            ->with('success', 'Pelanggan berhasil dihapus');
    }
}
