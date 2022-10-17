@extends('layouts.main')
@section('content')

<div class="row">
  <div class="col-lg-6 pr-lg-1">
    <div class="card shadow-sm" data-aos="fade-right" data-aos-delay="50">
      <div class="card-header py-3 px-sm-3 px-2">
        <h6 class="m-0 font-weight-bold text-primary" data-aos="fade-right" data-aos-delay="100">Data Kendaraan</h6>
      </div>
      <div class="card-body px-sm-3 px-2">
        <form action="#" method="POST" enctype="multipart/form-data" class="row">
          <div class="col-md-6 mb-2 pr-md-2">
            <label for="mk_nama_kendaraan" class="form-label" data-aos="fade-right" data-aos-delay="150">Nama Kendaraan</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="mk_nama_kendaraan" value="{{ $kendaraan->mk_nama_kendaraan }}" readonly data-aos="fade-right" data-aos-delay="200">
            </div>
          <div class="col-md-6 mb-2 pl-md-2">
            <label for="mk_no_polisi" class="form-label" data-aos="fade-left" data-aos-delay="100">No Polisi</label>
            <input type="text" class="form-control @error('nopolisi') is-invalid @enderror" name="mk_no_polisi" readonly value="{{ $kendaraan->mk_no_polisi }}" data-aos="fade-left" data-aos-delay="150">
          </div>
          <div class="col-md-6 mb-2 pr-md-2">
            <label for="mk_jenis" class="form-label" data-aos="fade-right" data-aos-delay="250">Jenis Kendaraan</label>
            <input type="text" class="form-control" name="mk_warna" readonly  value="{{ $kendaraan->mk_jenis }}" data-aos="fade-right" data-aos-delay="300">
            </div>
          <div class="col-md-6 mb-2 pl-md-2">
            <label for="mk_merk" class="form-label" data-aos="fade-left" data-aos-delay="200">Merk Kendaraan</label>
            <input type="text" class="form-control @error('merk') is-invalid @enderror" name="mk_merk" readonly  value="{{ $kendaraan->mk_merk }}" data-aos="fade-left" data-aos-delay="250">
            </div>
          <div class="col-md-6 mb-2 pr-md-2">
            <label for="mk_warna" class="form-label" data-aos="fade-right" data-aos-delay="350">Warna Kendaraan</label>
            <input type="text" class="form-control @error('warna') is-invalid @enderror" name="mk_warna" readonly  value="{{ $kendaraan->mk_warna }}" data-aos="fade-right" data-aos-delay="400">
          </div>
          <div class="col-md-6 mb-3 pl-md-2">
            <label for="mk_perlengkapan" class="form-label" data-aos="fade-left" data-aos-delay="300">Perlengkapan</label>
            <input type="text" class="form-control" name="mk_warna" readonly  value="{{ $kendaraan->mk_perlengkapan }}" data-aos="fade-left" data-aos-delay="350">
          </div>
          <div class="col-12 mt-4 mb-1">
            @if(auth()->user()->level == "general-affair")
            <button class="btn btn-info mr-1">
              <i class="fa fa-angle-left"></i>
              <a href="{{ route('app_kendaraan.index') }}" class="text-white text-decoration-none">
                Kembali
              </a>
            </button>
            @endif

            @if(auth()->user()->level == "pegawai")
            <button class="btn btn-info mr-1">
              <i class="fa fa-angle-left"></i>
              <a href="/home" class="text-white text-decoration-none">
                Kembali
              </a>
            </button>
            @endif

            @if(auth()->user()->level == "management")
            <button class="btn btn-info mb-1 mr-1">
              <i class="fa fa-angle-left"></i>
              <a href="{{ route('app_kendaraan.index') }}" class="text-white text-decoration-none">
                Kembali
              </a>
            </button>
            @endif

          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="col-lg-6 pl-lg-1">
    <div class="card shadow-sm" data-aos="fade-left" data-aos-delay="50">
      <div class="card-header py-3 px-sm-3 px-2">
        <h6 class="m-0 font-weight-bold text-primary" data-aos="fade-left" data-aos-delay="100">Status Kendaraan</h6>
      </div>
      <div class="card-body px-sm-3 px-2">
        <form action="#" method="POST" enctype="multipart/form-data" class="row">
          <div class="col-12 mb-2">
            <label for="mk_perlengkapan" class="form-label" data-aos="fade-left" data-aos-delay="150">Status</label>
            <input type="text" class="form-control"  readonly  value="{{ $kendaraan->mk_status }}" data-aos="fade-left" data-aos-delay="200">
          </div>
          <div class="col-12 mb-2">
            <label for="mk_Bahan_bakar" class="form-label" data-aos="fade-left" data-aos-delay="200">Bahan Bakar Tersedia</label>
            <input type="text" class="form-control"  readonly  
            value="{{ $kendaraan->mk_bahan_bakar }}" data-aos="fade-left" data-aos-delay="250">
            </div>
          <div class="col-12 mb-2">
            <label for="mk_kilometer" class="form-label" data-aos="fade-left" data-aos-delay="250">Kilometer</label>
            <input type="text" class="form-control" name="mk_kilometer" readonly  
            value="{{ $kendaraan->mk_kilometer }} KM" data-aos="fade-left" data-aos-delay="300">
          </div>
          <div class="col-12 mb-1">
            <label for="mk_kondisi_lain" class="form-label" data-aos="fade-left" data-aos-delay="300">Kondisi Lain</label>
            <input type="text" class="form-control" name="mk_kondisi_lain" readonly  
            value="{{ $kendaraan->mk_kondisi_lain }}" data-aos="fade-left" data-aos-delay="350">
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection  


