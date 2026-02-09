@extends('layouts.master')

@section('title', 'Tambah Penjualan')

@section('content')
<div class="page-header">
    <h1>Tambah Penjualan Baru</h1>
    <a href="{{ route('penjualan.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>
</div>

<div class="card">
    <div class="card-body">
        <form action="{{ route('penjualan.store') }}" method="POST">
            @csrf

                 
            <div class="row">
                <div class="col-md-6">
                   <div class="form-group">
                        <label>Faktur <span class="text-danger">*</span></label>
                        <input type="text" 
                               name="faktur_id" 
                               class="form-control @error('faktur_id') is-invalid @enderror"
                               value="{{ old('faktur_id') }}" maxlength="6" required>
                        @error('faktur_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
            
            <div class="row">
                <div class="col-md-6">
                   <div class="form-group">
                        <label>No Pelanggan <span class="text-danger">*</span></label>
                        <input type="text" 
                               name="no_pelanggan" 
                               class="form-control @error('no_pelanggan') is-invalid @enderror"
                               value="{{ old('no_pelanggan') }}"
                               maxlength="6"
                               required>
                        @error('no_pelanggan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label>Tanggal Penjualan <span class="text-danger">*</span></label>
                        <input type="date" 
                               name="tanggal_penjualan" 
                               class="form-control @error('tanggal_penjualan') is-invalid @enderror"
                               value="{{ old('tanggal_penjualan') }}"
                               required>
                        @error('tanggal_penjualan')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>
            
            <div class="form-actions">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save"></i> Simpan
                </button>
                <a href="{{ route('penjualan.index') }}" class="btn btn-secondary">
                    <i class="fas fa-times"></i> Batal
                </a>
            </div>
        </form>
    </div>
</div>
@endsection

