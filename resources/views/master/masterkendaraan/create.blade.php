@extends('layouts.main')

@section('content')
<div class="row">
  <div class="col-lg-6 pr-sm-1 pr-0">
    <form action="{{ route('master_kendaraan.store') }}" method="POST" enctype="multipart/form-data" class="px-0">
    @csrf
    <div class="card shadow-sm mb-4" data-aos="fade-right" data-aos-delay="100">
      <div class="card-header py-3 px-3">
        <h6 class="m-0 font-weight-bold text-primary" data-aos="fade-right" data-aos-delay="500">Status Kendaraan</h6>
      </div>
      <div class="card-body px-1">
        <div class="col-12 mb-2">
          <label class="form-label" data-aos="fade-right" data-aos-delay="600">Status</label>
          <select name="mk_status" class="custom-select custom-select-md" data-aos="fade-right" data-aos-delay="650">
            <option class="text-success" value="tersedia">Tersedia</option>
            <option class="text-primary" value="sedang dipakai">Sedang Di Pakai</option>
            <option class="text-warning" value="akan dipakai">Akan Di Pakai</option>
          </select>
        </div>
        <div class="col-12 mb-2">
          <label for="mk_bahan_bakar" class="form-label" data-aos="fade-right" data-aos-delay="700">Jumlah Bahan Bakar</label>
          <input type="text" class="form-control @error('mk_bahan_bakar') is-invalid @enderror" name="mk_bahan_bakar" required data-aos="fade-right" data-aos-delay="750">
          @error('mk_bahan_bakar')
              <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="col-12 mb-2">
          <label for="mk_kilometer" class="form-label" data-aos="fade-right" data-aos-delay="800">Kilometer</label>
          <input type="text" class="form-control @error('mk_kilometer') is-invalid @enderror" name="mk_kilometer" required data-aos="fade-right" data-aos-delay="850">
          @error('mk_kilometer')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="col-12 mb-2">
          <label for="mk_kondisi_lain" class="form-label" data-aos="fade-right" data-aos-delay="900">Kondisi Lain</label>
          <input type="text" class="form-control @error('mk_kondisi_lain') is-invalid @enderror" name="mk_kondisi_lain" data-aos="fade-right" data-aos-delay="950">
          @error('mk_kondisi_lain')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 pl-sm-1 pl-0">
    <div class="card shadow-sm mb-4" data-aos="fade-left" data-aos-delay="100">
      <div class="card-header py-3 px-3">
        <h6 class="m-0 font-weight-bold text-primary" data-aos="fade-right" data-aos-delay="500">Tambah Kendaraan</h6>
      </div>
      <div class="card-body px-sm-3">
        <div class="row">
          <div class="col-md-6 mb-2">
            <label for="mk_nama_kendaraan" class="form-label" data-aos="fade-right" data-aos-delay="600">Nama Kendaraan</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="mk_nama_kendaraan" required data-aos="fade-right" data-aos-delay="650">
            @error('nama')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-md-6 mb-2">
            <label for="mk_no_polisi" class="form-label" data-aos="fade-left" data-aos-delay="600">No Polisi</label>
            <input type="text" class="form-control @error('nopolisi') is-invalid @enderror" name="mk_no_polisi" required data-aos="fade-left" data-aos-delay="650">
            @error('nopolisi')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-md-6 mb-2">
            <label class="form-label" data-aos="fade-right" data-aos-delay="700">Jenis Kendaraan</label>
            <select name="mk_jenis" id="mk_jenis" class="custom-select custom-select-md mb-3" data-aos="fade-right" data-aos-delay="750">
              <option value="Roda 2">Roda dua (2)</option>
              <option value="Roda 4">Roda empat (4)</option>
            </select>
          </div>
          <div class="col-md-6 mb-2">
            <label for="mk_merk" class="form-label" data-aos="fade-left" data-aos-delay="700">Merk Kendaraan</label>
            <input type="text" class="form-control @error('merk') is-invalid @enderror" name="mk_merk" required data-aos="fade-left" data-aos-delay="750">
            @error('merk')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-md-6 mb-2">
            <label for="mk_warna" class="form-label" data-aos="fade-right" data-aos-delay="800">Warna Kendaraan</label>
            <input type="text" class="form-control @error('warna') is-invalid @enderror" name="mk_warna" required data-aos="fade-right" data-aos-delay="850">
            @error('warna')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-md-6 mb-2">
            <label class="form-label" data-aos="fade-left" data-aos-delay="800">Perlengkapan</label>
            <select name="mk_perlengkapan" id="mk_perlengkapan" class="custom-select custom-select-md mb-3" data-aos="fade-left" data-aos-delay="850">
              <option value="STNK-BPKB">STNK-BPKB</option>
              <option value="STNK">STNK</option>
              <option value="BPKB">BPKB</option>
            </select>
          </div>
          <div class="col-12 mb-2">
            <button class="btn btn-info mr-1" data-aos="fade-right" data-aos-delay="900">
              <i class="fa fa-angle-left"></i>
              <a href="{{ route('master_kendaraan.index') }}" class="text-white text-decoration-none">Kembali</a>
            </button>
            <button type="submit" class="btn btn-success" data-aos="fade-left" data-aos-delay="900">
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

