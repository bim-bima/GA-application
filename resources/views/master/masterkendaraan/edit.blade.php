@extends('layouts.main')
@section('content')
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Edit Kendaraan</h6>
  </div>
  <div class="card-body">
    <form action="{{ route('master_kendaraan.update',$kendaraan->id) }}" method="POST" enctype="multipart/form-data" class="row">
      @csrf
      @method('put')
      <div class="col-md-6 mb-2">
        <label for="mk_nama_kendaraan" class="form-label">Nama Kendaraan</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="mk_nama_kendaraan" value="{{ $kendaraan->mk_nama_kendaraan }}" required>
        @error('nama')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-md-6 mb-2">
        <label for="mk_no_polisi" class="form-label">No Polisi</label>
        <input type="text" class="form-control @error('nopolisi') is-invalid @enderror" name="mk_no_polisi" required value="{{ $kendaraan->mk_no_polisi }}">
        @error('nopolisi')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-md-6 mb-2">
        <label for="mk_jenis" class="form-label">Jenis Kendaraan</label>
        <select name="mk_jenis" class="form-control @error('mk_jenis') is-invalid @enderror" required>
          <option value="{{ $kendaraan->mk_jenis }}" ></option>
          <option value="Roda 2">Roda dua (2)</option>
          <option value="Roda 4">Roda empat (4)</option>
        </select>
        @error('mk_jenis')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-md-6 mb-2">
        <label for="mk_merk" class="form-label">Merk Kendaraan</label>
        <input type="text" class="form-control @error('merk') is-invalid @enderror" name="mk_merk" required  value="{{ $kendaraan->mk_merk }}">
        @error('merk')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-md-6 mb-2">
        <label for="mk_warna" class="form-label">Warna Kendaraan</label>
        <input type="text" class="form-control @error('warna') is-invalid @enderror" name="mk_warna" required  value="{{ $kendaraan->mk_warna }}">
        @error('warna')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-md-6 mb-2">
        <label for="mk_perlengkapan" class="form-label">Perlengkapan</label>
          <select name="mk_perlengkapan" class="form-control @error('mk_perlengkapan') is-invalid @enderror" required>
            <option value="{{ $kendaraan->mk_perlengkapan }}"></option>
            <option value="STNK-BPKB">STNK-BPKB</option>
            <option value="STNK">STNK</option>
            <option value="BPKB">BPKB</option>
          </select>
        @error('mk_perlengkapan')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-md-6 mb-2">
        <button class="btn btn-info my-3 mr-1">
          <i class="fa fa-angle-left"></i>
          <a href="{{ route('master_kendaraan.index') }}" class="text-white text-decoration-none">Kembali</a>
        </button>
        <button type="submit" class="btn btn-success my-3">
          <i class="fa fa-edit"></i>
          Edit
        </button>
      </div>
    </form>
  </div>
</div>
@endsection


        <!-- <label class="form-label mt-3">Perlengkapan</label>
      <select name="mk_perlengkapan" id="mk_perlengkapan" class="custom-select custom-select-md mb-3">
        <option value="stnk_bpkb">STNK-BPKB</option>
        <option value="stnk">STNK</option>
        <option value="bpkb">BPKB</option>
      </select> -->


       <!-- <label class="form-label mt-3">Jenis Kendaraan</label>
       <select name="mk_jenis" id="mk_jenis" class="custom-select custom-select-md mb-3">
        <option value="Roda2">Roda dua (2)</option>
        <option value="Roda3">Roda empat (4)</option>
       </select> -->
      