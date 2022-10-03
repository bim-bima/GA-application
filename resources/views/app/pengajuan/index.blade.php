@extends('layouts.main')

@section('content')

@include('sweetalert::alert')

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Daftar Pengajuan</h6>
      <button class="btn btn-primary mt-3">
        <i class="fa fa-plus"></i>
        <a href="{{ route('app_pengajuan.create') }}" class="text-white text-decoration-none">Tambah</a>
      </button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered border" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th>Nama Pengajuan</th>
                <th>Jenis</th>
                <th>Vendor</th>
                <th>Biaya</th>
                <th>Catatan</th>
                <th>Tanggal Pengadaan</th>
                <th>PIC</th>
                <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($datapengajuan as $pengajuan)
            <tr>
              <input type="hidden" class="delete_id" value="{{ $pengajuan->id }}">
              <td>{{ $pengajuan->ap_nama_pengajuan }}</td>
              <td>{{ $pengajuan->ap_jenis_pengajuan }}</td>
              <td>{{ $pengajuan->ap_mv_id }}</td>
              <td>{{ $pengajuan->ap_biaya }}</td>
              <td>{{ $pengajuan->ap_catatan }}</td>
              <td>{{ $pengajuan->ap_tanggal_pengadaan }}</td>
              <td>{{ $pengajuan->ap_mp_id }}</td>
              <td>
                <a class="btn btn-warning btn-circle" href="{{ route('app_pengajuan.edit',$pengajuan->id) }}">
                  <i class="fa fa-edit"></i>
                </a>
                <form action="{{ route('app_pengajuan.destroy',$pengajuan->id) }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    {{-- <input class="btn btn-danger btndelete2" type="submit" value="Delete"> --}}
                    <a href="" class="btn btn-danger btn-circle btndelete2">
                      <i class="fas fa-trash"></i>
                    </a>
                </form>
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>
       {{ $datapengajuan->links() }}

      </div>
    </div>
  </div>
@endsection

