@extends('layouts.master')
@extends('layouts.navbar')

@section('title', 'Daftar Barang')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0"><i class="fas fa-box"></i> Daftar Barang</h5>
        <a href="{{ route('barang.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Barang
        </a>
    </div>
    
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga Barang</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataBarang as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->kode_barang}}</td>
                    <td>{{ $item->nama_barang }}</td>
                    <td>Rp {{ number_format($item->harga_barang, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('barang.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('barang.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $dataBarang->links() }}
    </div>
</div>
@endsection