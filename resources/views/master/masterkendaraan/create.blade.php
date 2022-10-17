@extends('layouts.main')

@section('content')
<div class="row">
  <div class="col-lg-6 pr-sm-1 pr-0">
    <form action="{{ route('master_kendaraan.store') }}" method="POST" enctype="multipart/form-data" class="px-0">
    @csrf
    <div class="card shadow-sm mb-4" data-aos="fade-right" data-aos-delay="50">
      <div class="card-header py-3 px-3">
        <h6 class="m-0 font-weight-bold text-primary" data-aos="fade-right" data-aos-delay="100">Status Kendaraan</h6>
      </div>
      <div class="card-body px-1">
        <div class="col-12 mb-2">
          <label class="form-label">Status</label>
          <select name="mk_status" class="custom-select custom-select-md">
            <option class="text-success" value="tersedia">Tersedia</option>
            <option class="text-primary" value="sedang dipakai">Sedang Di Pakai</option>
            <option class="text-warning" value="akan dipakai">Akan Di Pakai</option>
          </select>
        </div>
        <div class="col-12 mb-2">
          <label for="mk_bahan_bakar" class="form-label">Jumlah Bahan Bakar</label>
          <input type="text" class="form-control @error('mk_bahan_bakar') is-invalid @enderror" name="mk_bahan_bakar" required>
          @error('mk_bahan_bakar')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="col-12 mb-2">
          <label for="mk_kilometer" class="form-label">Kilometer</label>
          <input type="text" class="form-control @error('mk_kilometer') is-invalid @enderror" name="mk_kilometer" required>
          @error('mk_kilometer')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="col-12 mb-2">
          <label for="mk_kondisi_lain" class="form-label">Kondisi Lain</label>
          <input type="text" class="form-control @error('mk_kondisi_lain') is-invalid @enderror" name="mk_kondisi_lain">
          @error('mk_kondisi_lain')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 pl-sm-1 pl-0">
    <div class="card shadow-sm mb-4" data-aos="fade-left" data-aos-delay="50">
      <div class="card-header py-3 px-3">
        <h6 class="m-0 font-weight-bold text-primary" data-aos="fade-right" data-aos-delay="100">Tambah Kendaraan</h6>
      </div>
      <div class="card-body px-sm-3">
        <div class="row">
          <div class="col-md-6 mb-2">
            <label for="mk_nama_kendaraan" class="form-label">Nama Kendaraan</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="mk_nama_kendaraan" required>
            @error('nama')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-md-6 mb-2">
            <label for="mk_no_polisi" class="form-label">No Polisi</label>
            <input type="text" class="form-control @error('nopolisi') is-invalid @enderror" name="mk_no_polisi" required>
            @error('nopolisi')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-md-6 mb-2">
            <label class="form-label">Jenis Kendaraan</label>
            <select name="mk_jenis" id="mk_jenis" class="custom-select custom-select-md mb-3">
              <option value="Roda 2">Roda dua (2)</option>
              <option value="Roda 4">Roda empat (4)</option>
            </select>
          </div>
          <div class="col-md-6 mb-2">
            <label for="mk_merk" class="form-label">Merk Kendaraan</label>
            <input type="text" class="form-control @error('merk') is-invalid @enderror" name="mk_merk" required>
            @error('merk')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-md-6 mb-2">
            <label for="mk_warna" class="form-label">Warna Kendaraan</label>
            <input type="text" class="form-control @error('warna') is-invalid @enderror" name="mk_warna" required>
            @error('warna')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-md-6 mb-2">
            <label class="form-label">Perlengkapan</label>
            <select name="mk_perlengkapan" id="mk_perlengkapan" class="custom-select custom-select-md mb-3">
              <option value="STNK-BPKB">STNK-BPKB</option>
              <option value="STNK">STNK</option>
              <option value="BPKB">BPKB</option>
            </select>
          </div>
          <div class="col-12 mb-2">
            <button class="btn btn-info mr-1">
              <i class="fa fa-angle-left"></i>
              <a href="{{ route('master_kendaraan.index') }}" class="text-white text-decoration-none">Kembali</a>
            </button>
            <button type="submit" class="btn btn-success">
              <i class="fa fa-plus-circle"></i>
              Tambah
            </button>
          </div>
        </div>
    </form>
      </div>
    </div>
  </div>
</div>
@endsection

