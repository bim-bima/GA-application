@extends('layouts.main')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tambah Vendor</h6>
    </div>
    <div class="card-body">
       <form action="{{ route('master_vendor.store') }}" method="POST" enctype="multipart/form-data" class="col-lg-6">
           @csrf
               <label for="mv_nama_vendor" class="form-label">Nama Vendor</label>
               <input type="text" class="form-control @error('nama') is-invalid @enderror" name="mv_nama_vendor" required>
                @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label for="mv_lokasi" class="form-label">Lokasi Vendor</label>
                <input type="text" class="form-control @error('lokasi') is-invalid @enderror" name="mv_lokasi" required>
                @error('lokasi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
           <button type="submit" class="btn btn-primary my-3">Tambah</button>
           <button class="btn btn-primary my-3"><a  href="{{ route('master_vendor.index') }}" class="text-white text-decoration-none">kembali</a></button>
       </form>
      </div>
    </div>
@endsection


