@extends('layouts.master')
@extends('layouts.navbar')

@section('title', 'Daftar Pelanggan')

@section('content')
<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0"><i class="fas fa-box"></i> Daftar Pelanggan</h5>
        <a href="{{ route('pelanggan.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Tambah Pelanggan
        </a>
    </div>
    
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>No Pelanggan</th>
                    <th>Nama Pelanggan</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataPelanggan as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->nama_pelanggan }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>
                        <a href="{{ route('pelanggan.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('pelanggan.destroy', $item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $dataPelanggan->links() }}
    </div>
</div>
@endsection