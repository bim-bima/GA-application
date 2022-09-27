@extends('layouts.main')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tambah</h6>
    </div>
    <div class="card-body">
       <form action="{{ route('app_kendaraan.store') }}" method="POST" enctype="multipart/form-data" class="col-lg-6">
           @csrf
                <label for="ak_mk_id" class="form-label">Nama Kendaraan</label>
                 <select name="ak_mk_id" class="form-control @error('ak_mk_id') is-invalid @enderror" required>
                    <option value="">Pilih Kendaraan</option>
                    @foreach ($namaKendaraan as $kendaraan)
                        <option value="{{ $kendaraan->id }}">{{ $kendaraan->mk_nama_kendaraan}}</option>
                    @endforeach    
                 </select>
                @error('ak_mk_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
               <label for="ak_pengguna" class="form-label">Pengguna</label>
               <input type="text" class="form-control @error('pengguna') is-invalid @enderror" name="ak_pengguna" required>
                @error('pengguna')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
               <label for="ak_tanggal_mulai" class="form-label">Tanggal Mulai</label>
               <input type="date" class="form-control @error('tanggal') is-invalid @enderror" name="ak_tanggal_mulai" required>
                @error('tanggal')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                <label for="ak_jam" class="form-label">Jam</label>
               <input type="time" class="form-control @error('jam') is-invalid @enderror" name="ak_jam" required>
                @error('jam')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
                <label for="ak_mp_id" class="form-label">PIC</label>
                 <select name="ak_mp_id" class="form-control @error('ak_mp_id') is-invalid @enderror" required>
                    <option value="">Pilih PIC</option>
                    @foreach ($datapic as $pic)
                        <option value="{{ $pic->id }}">{{ $pic->mp_nama }}</option>
                    @endforeach    
                 </select>
                @error('ak_mp_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                 <label for="ak_kondisi" class="form-label">Kondisi</label>
               <input type="text" class="form-control @error('kondisi') is-invalid @enderror" name="ak_kondisi" required>
                @error('kondisi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                 <label for="ak_lokasi_tujuan" class="form-label">Lokasi Tujuan</label>
               <input type="text" class="form-control @error('lokasi_tujuan') is-invalid @enderror" name="ak_lokasi_tujuan" required>
                @error('lokasi_tujuan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

                 <label for="ak_tujuan_pemakaian" class="form-label">Umur Manfaat</label>
               <input type="text" class="form-control @error('tujuan') is-invalid @enderror" name="ak_tujuan_pemakaian" required>
                @error('tujuan')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

           <button type="submit" class="btn btn-primary my-3">Tambah</button>
           <button class="btn btn-primary my-3"><a  href="{{ route('app_kendaraan.index') }}" class="text-white text-decoration-none">kembali</a></button>
       </form>
      </div>
    </div>
@endsection


