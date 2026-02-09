@extends('layouts.master')

@section('title', 'Detail Penjualan')

@section('content')
<div class="page-header">
    <h1>Detail Penjualan</h1>
    <a href="{{ route('penjualan.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>
</div>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label><strong>Faktur ID</strong></label>
                    <p>{{ $penjualan->faktur_id }}</p>
                </div>

                <div class="form-group">
                    <label><strong>No Pelanggan</strong></label>
                    <p>{{ $penjualan->no_pelanggan }}</p>
                </div>

                <div class="form-group">
                    <label><strong>Tanggal Penjualan</strong></label>
                    <p>{{ $penjualan->tanggal_penjualan }}</p>
                </div>
            </div>
        </div>

        <div class="form-actions">
            <a href="{{ route('penjualan.edit', $penjualan->id) }}" class="btn btn-warning">
                <i class="fas fa-edit"></i> Edit
            </a>
            <form action="{{ route('penjualan.destroy', $penjualan->id) }}" method="POST" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    <i class="fas fa-trash"></i> Hapus
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
