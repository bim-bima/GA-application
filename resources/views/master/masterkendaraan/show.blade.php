@extends('layouts.main')
@section('content')

<div class="row">
  <div class="col-lg-6 pr-lg-1">
    <div class="card shadow-sm mb-4" data-aos="fade-right" data-aos-delay="50">
      <div class="card-header py-3 px-sm-3 px-2">
        <h6 class="m-0 font-weight-bold text-primary" data-aos="fade-right" data-aos-delay="100">Data Kendaraan</h6>
      </div>
      <div class="card-body px-sm-3 px-2">
        <form action="#" method="POST" enctype="multipart/form-data" class="row">
          <div class="col-md-6 mb-2 pr-md-1">
            <label for="mk_nama_kendaraan" class="form-label">Nama Kendaraan</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="mk_nama_kendaraan" value="{{ $kendaraan->mk_nama_kendaraan }}" readonly>
            </div>
          <div class="col-md-6 mb-2 pl-md-1">
            <label for="mk_no_polisi" class="form-label">No Polisi</label>
            <input type="text" class="form-control @error('nopolisi') is-invalid @enderror" name="mk_no_polisi" readonly value="{{ $kendaraan->mk_no_polisi }}">
          </div>
          <div class="col-md-6 mb-2 pr-md-1">
            <label for="mk_jenis" class="form-label">Jenis Kendaraan</label>
            <input type="text" class="form-control" name="mk_warna" readonly  value="{{ $kendaraan->mk_jenis }}">
            </div>
          <div class="col-md-6 mb-2 pl-md-1">
            <label for="mk_merk" class="form-label">Merk Kendaraan</label>
            <input type="text" class="form-control @error('merk') is-invalid @enderror" name="mk_merk" readonly  value="{{ $kendaraan->mk_merk }}">
            </div>
          <div class="col-md-6 mb-2 pr-md-1">
            <label for="mk_warna" class="form-label">Warna Kendaraan</label>
            <input type="text" class="form-control @error('warna') is-invalid @enderror" name="mk_warna" readonly  value="{{ $kendaraan->mk_warna }}">
          </div>
          <div class="col-md-6 mb-2 pl-md-1">
            <label for="mk_perlengkapan" class="form-label">Perlengkapan</label>
            <input type="text" class="form-control mb-4" name="mk_warna" readonly  value="{{ $kendaraan->mk_perlengkapan }}">
          </div>
          <div class="col-12 mt-2 mb-md-5">
            @if(auth()->user()->level == "general-affair")
            <button class="btn btn-info">
              <i class="fa fa-angle-left"></i>
              <a href="{{ route('app_kendaraan.index') }}" class="text-white text-decoration-none">
                Kembali
              </a>
            </button>
            @endif

            @if(auth()->user()->level == "pegawai")
            <button class="btn btn-info">
              <i class="fa fa-angle-left"></i>
              <a href="/home" class="text-white text-decoration-none">
                Kembali
              </a>
            </button>
            @endif

            @if(auth()->user()->level == "management")
            <button class="btn btn-info mb-3">
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
    <div class="card shadow-sm mb-4" data-aos="fade-left" data-aos-delay="50">
      <div class="card-header py-3 px-sm-3 px-2">
        <h6 class="m-0 font-weight-bold text-primary" data-aos="fade-left" data-aos-delay="100">Status Kendaraan</h6>
      </div>
      <div class="card-body px-sm-3 px-2">
        <form action="#" method="POST" enctype="multipart/form-data" class="row">
          <div class="col-12 mb-2">
            <label for="mk_perlengkapan" class="form-label">Status</label>
            <input type="text" class="form-control"  readonly  value="{{ $kendaraan->mk_status }}">
          </div>
          <div class="col-12 mb-2">
            <label for="mk_Bahan_bakar" class="form-label">Bahan Bakar Tersedia</label>
            <input type="text" class="form-control"  readonly  
            value="{{ $kendaraan->mk_bahan_bakar }}">
            </div>
          <div class="col-12 mb-2">
            <label for="mk_kilometer" class="form-label">Kilometer</label>
            <input type="text" class="form-control" name="mk_kilometer" readonly  
            value="{{ $kendaraan->mk_kilometer }} KM">
          </div>
          <div class="col-12">
            <label for="mk_kondisi_lain" class="form-label">Kondisi Lain</label>
            <textarea type="text" class="form-control" name="mk_kondisi_lain" readonly value="{{ $kendaraan->mk_kondisi_lain }}" rows="3" >{{ $kendaraan->mk_kondisi_lain }}</textarea>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection  


