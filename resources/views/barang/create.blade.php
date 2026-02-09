@extends('layouts.master')

@section('title', 'Tambah Barang')

@section('content')
<div class="page-header">
    <h1>Tambah Barang Baru</h1>
    <a href="{{ route('barang.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('barang.store') }}" method="POST">
            @csrf
            
            <div class="row">
                <div class="col-md-6">
                   <div class="form-group">
                        <label>Kode Barang <span class="text-danger">*</span></label>
                        <input type="text" 
                               name="kode_barang" 
                               class="form-control @error('kode_barang') is-invalid @enderror"
                               value="{{ old('kode_barang') }}"
                               required>
                        @error('kode_barang')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Nama -->
                    <div class="form-group">
                        <label>Nama Barang <span class="text-danger">*</span></label>
                        <input type="text" 
                               name="nama_barang" 
                               class="form-control @error('nama_barang') is-invalid @enderror"
                               value="{{ old('nama_barang') }}"
                               required>
                        @error('nama_barang')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
  <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="harga_barang">Harga Barang (Rp) <span class="text-danger">*</span></label>
                    <input type="number" 
                           class="form-control @error('Harga') is-invalid @enderror" 
                           id="harga_barang" 
                           name="harga_barang" 
                           value="{{ old('harga_barang') }}"
                           placeholder="0"
                           min="0"
                           step="100"
                           required>
                    @error('harga_barang')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan
                </button>
                <a href="{{ route('barang.index') }}" class="btn btn-secondary">
                    <i class="fas fa-times"></i> Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection

