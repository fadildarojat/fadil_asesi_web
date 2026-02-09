@extends('layouts.master')

@section('title', 'Edit Barang')

@section('content')
<div class="page-header">
    <h1>Edit Barang</h1>
    <a href="{{ route('barang.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('barang.update', $barang) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="kode_barang">Kode Barang <span class="text-danger">*</span></label>
                <input type="text" 
                       class="form-control @error('kode_barang') is-invalid @enderror" 
                       id="kode_barang" 
                       name="kode_barang" 
                       value="{{ old('kode_barang', $barang->kode_barang) }}"
                       required>
                @error('kode_barang')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nama_barang">Nama Barang <span class="text-danger">*</span></label>
                <input type="text" 
                       class="form-control @error('nama_barang') is-invalid @enderror" 
                       id="nama_barang" 
                       name="nama_barang" 
                       value="{{ old('nama_barang', $barang->nama_barang) }}"
                       required>
                @error('nama_barang')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="harga_barang">Harga Barang(Rp) <span class="text-danger">*</span></label>
                    <input type="number" 
                           class="form-control @error('harga_barang') is-invalid @enderror" 
                           id="harga_barang" 
                           name="harga_barang" 
                           value="{{ old('harga_barang', $barang->harga_barang) }}"
                           min="0"
                           step="100"
                           required>
                    @error('harga_barang')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Update
                </button>
            </div>
        </form>
    </div>
</div>
@endsection