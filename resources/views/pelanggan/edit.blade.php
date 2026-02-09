@extends('layouts.master')

@section('title', 'Edit Pelanggan')

@section('content')
<div class="page-header">
    <h1>Edit Pelanggan</h1>
    <a href="{{ route('pelanggan.index') }}" class="btn btn-secondary">
        <i class="fas fa-arrow-left"></i> Kembali
    </a>
</div>

            <div class="form-group">
                <label for="nama_pelanggan">Nama Pelanggan <span class="text-danger">*</span></label>
                <input type="text" 
                       class="form-control @error('nama_Pelanggan') is-invalid @enderror" 
                       id="nama_pelanggan" 
                       name="nama_pelanggan" 
                       value="{{ old('nama_pelanggan', $pelanggan->nama_pelanggan) }}"
                       required>
                @error('nama_pelanggan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

           <div class="form-group">
                <label for="alamat">Alamat Pelanggan <span class="text-danger">*</span></label>
                <input type="text" 
                       class="form-control @error('alamat') is-invalid @enderror" 
                       id="alamat" 
                       name="alamat" 
                       value="{{ old('alamat', $pelanggan->alamat) }}"
                       required>
                @error('alamat')
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