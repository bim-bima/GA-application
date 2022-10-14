@extends('layouts.main')

@section('content')

@include('sweetalert::alert')

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Riwayat Booking Kendaraan</h6>
  </div>
  <div class="card-body">
    <div class="row">
      
    </div>
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Kendaraan</th>
            <th>Pengguna</th>
            <th>Tanggal Mulai</th>
            <th>Jam Mulai</th>
            <th>Tanggal Selesai</th>
            <th>Jam Selesai</th>
            <th>Nama PIC</th>
            <th>Menuju</th>
            <th>Tujuan</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>{{ $kendaraan->namaKendaraan->mk_nama_kendaraan }}</td>
            <td>{{ $kendaraan->ak_pengguna }}</td>
            <td>{{ $kendaraan->ak_tanggal_mulai }}</td>
            <td>{{ $kendaraan->ak_jam }}</td>
            <td>{{ $kendaraan->ak_tanggal_selesai }}</td>
            <td>{{ $kendaraan->ak_jam_selesai }}</td>
            <td>{{ $kendaraan->pic->mp_nama }}</td>
            <td>{{ $kendaraan->ak_lokasi_tujuan }}</td>
            <td>{{ $kendaraan->ak_tujuan_pemakaian }}</td>
          </tr>
        </tbody>
      </table>
      <button class="btn btn-info my-3 mr-1">
          <i class="fa fa-angle-left"></i>
          <a href="/home" class="text-white text-decoration-none">Kembali</a>
        </button>
    </div>
  </div>
</div>
@endsection