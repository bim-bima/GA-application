@extends('layouts.main')
@section('content')

<div class="row">
  <div class="col-lg-6 pr-lg-2 pr-1">
    <div class="card shadow-sm mb-4" data-aos="fade-right" data-aos-delay="50">
      <div class="card-header py-3 px-sm-3 px-2">
        <h6 class="m-0 font-weight-bold text-primary" data-aos="fade-right" data-aos-delay="100">Status Kendaraan</h6>
      </div>
      <div class="card-body px-sm-3 px-2">  
          <form action="{{ route('master_kendaraan.update',$kendaraan->id) }}" method="POST" enctype="multipart/form-data" class="row">
          @csrf
          @method('put')
          <div class="col-12 mb-2">
            <label for="mk_status" class="form-label">Status</label>
            <select name="mk_status" class="form-control @error('mk_status') is-invalid @enderror" required>
              <option value="{{ $kendaraan->mk_status }}">{{ $kendaraan->mk_status }}</option>
              <option value="tersedia">Tersedia</option>
              <option value="sedang dipakai">Sedang Di Pakai</option>
            </select>
              @error('mk_status')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
          </div>

          <div class="col-12 mb-2">
            <label for="Bahan_bakar" class="form-label">Bahan Bakar Tersedia</label>
            <input type="number" class="form-control @error('bahan_bakar') is-invalid @enderror" name="bahan_bakar" required  value="{{ $kendaraan->mk_bahan_bakar }}">
            @error('bahan_bakar')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>


          <div class="col-12 mb-1">
            <label for="kilometer" class="form-label">Kilometer</label>
            <input type="number" min="1" class="form-control @error('kilometer') is-invalid @enderror" name="kilometer" required  value="{{ $kendaraan->mk_kilometer }}">
            @error('kilometer')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

<div class="col-12 mb-1">
            <label for="kondisi_lain" class="form-label">Kondisi Lain</label>
            <input type="text" class="form-control @error('kondisi') is-invalid @enderror" name="kondisi_lain" required  value="{{ $kendaraan->mk_kondisi_lain }}">
            @error('kondisi_lain')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>

          <div class="col-md-6 mb-2">
            <label for="nama_kendaraan" class="form-label">Nama Kendaraan</label>
            <input type="text" class="form-control @error('nama_kendaraan') is-invalid @enderror" name="nama_kendaraan" value="{{ $kendaraan->mk_nama_kendaraan }}" required>
            @error('nama_kendaraan')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-md-6 mb-2">
            <label for="no_polisi" class="form-label">No Polisi</label>
            <input type="text" class="form-control @error('no_polisi') is-invalid @enderror" name="no_polisi" required value="{{ $kendaraan->mk_no_polisi }}">
            @error('no_polisi')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-md-6 mb-2">
            <label for="mk_jenis" class="form-label">Jenis Kendaraan</label>
            <select name="mk_jenis" class="form-control @error('mk_jenis') is-invalid @enderror" required>
              <option value="{{ $kendaraan->mk_jenis }}">{{ $kendaraan->mk_jenis }}</option>
              <option value="Roda 2">Roda dua (2)</option>
              <option value="Roda 4">Roda empat (4)</option>
            </select>
            @error('mk_jenis')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-md-6 mb-2">
            <label for="merk" class="form-label">Merk Kendaraan</label>
            <input type="text" class="form-control @error('merk') is-invalid @enderror" name="merk" required  value="{{ $kendaraan->mk_merk }}">
            @error('merk')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-md-6 mb-2">
            <label for="warna" class="form-label">Warna Kendaraan</label>
            <input type="text" class="form-control @error('warna') is-invalid @enderror" name="warna" required  value="{{ $kendaraan->mk_warna }}">
            @error('warna')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-md-6 mb-3">
            <label for="mk_perlengkapan" class="form-label">Perlengkapan</label>
              <select name="mk_perlengkapan" class="form-control @error('mk_perlengkapan') is-invalid @enderror" required>
                <option value="{{ $kendaraan->mk_perlengkapan }}">{{ $kendaraan->mk_perlengkapan }}</option>
                <option value="STNK-BPKB">STNK-BPKB</option>
                <option value="STNK">STNK</option>
                <option value="BPKB">BPKB</option>
              </select>
            @error('mk_perlengkapan')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
          </div>
          <div class="col-12 mt-4">
            <button class="btn btn-info mb-1 mr-1">
              <i class="fa fa-angle-left"></i>
              <a href="{{ route('app_kendaraan.index') }}" class="text-white text-decoration-none">
                Kembali
              </a>
            </button>
            <button type="submit" class="btn btn-success mb-1">
              <i class="fa fa-edit"></i>
              Edit
            </button>
          </div>          

      </div>
    </div>
  </div>

        </form>
</div>
@endsection
