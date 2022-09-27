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

                <label for="mk_no_polisi" class="form-label">No Polisi</label>
               <input type="text" class="form-control @error('nopolisi') is-invalid @enderror" name="mk_no_polisi" required>
                @error('nopolisi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

               <label class="form-label mt-3">Jenis Kendaraan</label>
               <select name="mk_jenis" id="mk_jenis" class="custom-select custom-select-md mb-3">
                <option value="Roda 2">Roda dua (2)</option>
                <option value="Roda 4">Roda empat (4)</option>
               </select>
            
                <label for="mk_merk" class="form-label">Merk Kendaraan</label>
               <input type="text" class="form-control @error('merk') is-invalid @enderror" name="mk_merk" required>
                @error('merk')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <label for="mk_warna" class="form-label">Warna Kendaraan</label>
               <input type="text" class="form-control @error('warna') is-invalid @enderror" name="mk_warna" required>
                @error('warna')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <label class="form-label mt-3">Perlengkapan</label>
              <select name="mk_perlengkapan" id="mk_perlengkapan" class="custom-select custom-select-md mb-3">
                <option value="STNK-BPKB">STNK-BPKB</option>
                <option value="STNK">STNK</option>
                <option value="BPKB">BPKB</option>
              </select>
               
           <button type="submit" class="btn btn-primary my-3">Tambah</button>
           <button class="btn btn-primary my-3"><a  href="{{ route('master_kendaraan.index') }}" class="text-white text-decoration-none">Kembali</a></button>
       </form>
      </div>
    </div>
@endsection


