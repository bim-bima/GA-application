@extends('layouts.main')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tambah Kendaraan</h6>
    </div>
    <div class="card-body">
       <form action="{{ route('master_kendaraan.store') }}" method="POST" enctype="multipart/form-data" class="col-lg-6">
           @csrf
               <label for="mk_nama_kendaraan" class="form-label">Nama Kendaraan</label>
               <input type="text" class="form-control @error('nama') is-invalid @enderror" name="mk_nama_kendaraan" required>
                @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
           <button type="submit" class="btn btn-primary my-3">Tambah</button>
           <button class="btn btn-primary my-3"><a  href="{{ route('master_kendaraan.index') }}" class="text-white text-decoration-none">Kembali</a></button>
       </form>
      </div>
    </div>
@endsection


