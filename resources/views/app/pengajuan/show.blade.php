@extends('layouts.main')

@section('content')

@include('sweetalert::alert')

<div class="card shadow mb-4">
  <div class="card-header pt-3">
    <h6 class="m-0 font-weight-bold text-primary">{{ $pengajuan->ap_nama_pengajuan }}</h6>
  </div>
  <div class="card-body">
    <table class="table table-bordered border" id="dataTable" width="100%" cellspacing="0">
      <thead>
        <tr>
          <th>Tanggal</th>
          <th>Nama Pengajuan</th>
          <th>Jenis</th>
          <th>Vendor</th>
          <th>Biaya</th>
          <th>Catatan</th>
          <th>Tanggal Estimasi</th>
          <th>PIC</th>
          <th>Status</th>
          <th>Alasan</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{ $pengajuan->created_at }}</td>
          <td>{{ $pengajuan->ap_nama_pengajuan }}</td>
          <td>{{ $pengajuan->jenispengajuan->mjp_jenis }}</td>
          <td>{{ $pengajuan->vendor->mv_nama_vendor }}</td>
          <td>{{ $pengajuan->ap_biaya }}</td>
          <td>{{ $pengajuan->ap_catatan }}</td>
          <td>{{ $pengajuan->ap_tanggal_pengadaan }}</td>
          <td>{{ $pengajuan->pic->mp_nama }}</td>
          <td>{{ $pengajuan->ap_status }}</td>
          <td>{{ $pengajuan->ap_reason }}</td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="px-3">
    <button class="btn btn-info mb-3 ml-1">
      <i class="fa fa-angle-left"></i>
      <a href="{{ route('app_pengajuan.index') }}" class="text-white text-decoration-none">Kembali</a>
    </button>
  </div> 
</div>
@endsection

