@extends('layouts.master')

@section('title', 'Tambah Pelanggan')

@section('content')
<div class="page-header">
    <h1>Tambah Pelanggan Baru</h1>
    <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('pelanggan.store') }}" method="POST">
            @csrf
            
            <div class="row">
                <div class="col-md-6">
                   <div class="form-group">
                        <label>Nomor Pelanggan <span class="text-danger">*</span></label>
                        <input type="text" 
                               name="no_pelanggan" 
                               class="form-control @error('no_pelanggan') is-invalid @enderror"
                               value="{{ old('no_pelanggan') }}"
                               required>
                        @error('no_pelanggan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Nama -->
                    <div class="form-group">
                        <label>Nama Pelanggan <span class="text-danger">*</span></label>
                        <input type="text" 
                               name="nama_pelanggan" 
                               class="form-control @error('nama_pelanggan') is-invalid @enderror"
                               value="{{ old('nama_pelanggan') }}"
                               required>
                        @error('nama_pelanggan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <!-- Alamat -->
                    <div class="form-group">
                        <label>Alamat</label>
                        <textarea name="alamat" 
                                  class="form-control @error('alamat') is-invalid @enderror"
                                  rows="4"
                                  placeholder="Alamat lengkap...">{{ old('alamat') }}</textarea>
                        @error('alamat')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan
                </button>
                <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">
                    <i class="fas fa-times"></i> Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection