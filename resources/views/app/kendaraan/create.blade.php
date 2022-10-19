@extends('layouts.main')

@section('content')
<div class="card shadow mb-4" data-aos="fade-up" data-aos-delay="50">
  <div class="card-header py-3 px-sm-3 px-2">
    <h6 class="m-0 font-weight-bold text-primary" data-aos="fade-right" data-aos-delay="100">Booking Kendaraan</h6>
  </div>
  <div class="card-body px-sm-3 px-2">
    <form action="{{ route('app_kendaraan.store') }}" method="POST" enctype="multipart/form-data" class="row px-0">
      @csrf
      <div class="col-md-6 mb-2">
        <label for="ak_mk_id" class="form-label" data-aos="fade-right" data-aos-delay="100">Kendaraan</label>
        <select name="ak_mk_id" class="form-control @error('ak_mk_id') is-invalid @enderror" required data-aos="fade-right" data-aos-delay="150">
          <option value="">Pilih Kendaraan</option>
          @foreach ($namaKendaraan as $kendaraan)
          <option value="{{ $kendaraan->id }}">{{ $kendaraan->mk_nama_kendaraan}}</option>
          @endforeach      
        </select>
        @error('ak_mk_id')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="col-md-6 mb-2">
        <label for="ak_mp_id" class="form-label" data-aos="fade-left" data-aos-delay="100">PIC</label>
        <select name="ak_mp_id" class="form-control @error('ak_mp_id') is-invalid @enderror" required data-aos="fade-left" data-aos-delay="150">
            <option value="">Pilih PIC</option>
            @foreach ($datapic as $pic)
            <option value="{{ $pic->id }}">{{ $pic->mp_nama }}</option>
            @endforeach
        </select>
        @error('ak_mp_id')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

        <div class="col-md-6 mb-2">
          <label for="ak_pengguna" class="form-label">Pengguna</label>
          <input type="text" class="form-control @error('ak_pengguna') is-invalid @enderror" name="ak_pengguna" required>
          @error('ak_pengguna')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

      <div class="col-md-6 mb-2">
        <label for="ak_tanggal_mulai" class="form-label" data-aos="fade-right" data-aos-delay="200">Tanggal Mulai</label>
        <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="ak_tanggal_mulai"
            required data-aos="fade-right" data-aos-delay="250">
        @error('tanggal')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-md-6 mb-2">
        <label for="ak_jam" class="form-label" data-aos="fade-left" data-aos-delay="200">Jam</label>
        <input type="time" class="form-control @error('jam') is-invalid @enderror" name="ak_jam" required data-aos="fade-left" data-aos-delay="250">
        @error('jam')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

      <div class="col-md-6 mb-2">
        <label for="ak_tanggal_selesai" class="form-label" data-aos="fade-right" data-aos-delay="300">Tanggal Selesai</label>
        <input type="date" class="form-control @error('tanggal_selesaiss') is-invalid @enderror" name="ak_tanggal_selesai"
            required data-aos="fade-right" data-aos-delay="350">
        @error('tanggal_selesaiss')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-md-6 mb-2">
        <label for="ak_jam_selesai" class="form-label" data-aos="fade-left" data-aos-delay="300">Jam Selesai</label>
        <input type="time" class="form-control @error('jam_selesai') is-invalid @enderror" name="ak_jam_selesai" required data-aos="fade-left" data-aos-delay="350">
        @error('jam_selesai')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>

            <div class="col-md-6 mb-2">
        <label for="ak_lokasi_tujuan" class="form-label" data-aos="fade-right" data-aos-delay="400">Lokasi Tujuan</label>
        <input type="text" class="form-control @error('lokasi_tujuan') is-invalid @enderror" name="ak_lokasi_tujuan" required data-aos="fade-right" data-aos-delay="450">
        @error('lokasi_tujuan')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-md-6 mb-2 mb-1">
        <label for="ak_tujuan_pemakaian" class="form-label" data-aos="fade-left" data-aos-delay="400">Tujuan Pemakaian</label>
        <input type="text" class="form-control @error('tujuan') is-invalid @enderror" name="ak_tujuan_pemakaian" required data-aos="fade-left" data-aos-delay="450">
        @error('tujuan')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-md-6 mb-2">
        @if(auth()->user()->level == "general-affair")
        <button class="btn btn-info mt-3 mr-1 mb-1">
          <i class="fa fa-angle-left"></i>
          <a href="{{ route('app_kendaraan.index') }}"class="text-white text-decoration-none">Kembali</a>
        </button>
        @endif
        @if(auth()->user()->level == "pegawai")
        <button class="btn btn-info mt-3 mr-1 mb-1">
          <i class="fa fa-angle-left"></i>
          <a href="/home" class="text-white text-decoration-none">Kembali</a>
        </button>
        @endif
        <button type="submit" class="btn btn-success mt-3 mb-1">
          <i class="fa fa-plus-circle"></i>
          Kirim
        </button>
      </div>
    </form>
  </div>
</div>
@endsection
