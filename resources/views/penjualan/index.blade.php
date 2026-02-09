@extends('layouts.master')
@extends('layouts.navbar')

@section('title', 'Daftar Penjualan')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0"><i class="fas fa-box"></i> Daftar Penjualan</h5>
        <a href="{{ route('penjualan.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Penjualan
        </a>
    </div>
    
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                <th>No</th>
                    <th>Faktur</th>
                    <th>No Pelanggan</th>
                    <th>Tanggal Penjualan</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataPenjualan as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->faktur_id}}</td>
                       <td>{{ $item->no_pelanggan }}</td>
                       <td>{{ $item->tanggal_penjualan}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $dataPenjualan->links() }}
    </div>
</div>
@endsection