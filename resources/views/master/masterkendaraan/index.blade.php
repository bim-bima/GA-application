@extends('layouts.main')

@section('content')

@include('sweetalert::alert')

<div class="card shadow mb-4">
  <div class="card-header py-3 px-sm-3 px-2">
    <h6 class="m-0 font-weight-bold text-primary">Daftar Kendaraan</h6>
    <button class="btn btn-primary mt-2">
      <i class="fa fa-plus"></i>
      <a href="{{ route('master_kendaraan.create') }}" class="text-white text-decoration-none">Tambah</a>
    </button>
  </div>
  <div class="card-body px-sm-3 px-1">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th class="border border-secondary">Nama Kendaraan</th>
            <th class="border border-secondary">No Polisi</th>
            <th class="border border-secondary">Jenis</th>
            <th class="border border-secondary">Merk</th>
            <th class="border border-secondary">Warna</th>
            <th class="border border-secondary">Perlengkapan</th>
            <th class="border border-secondary">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($datakendaraan as $kendaraan)
          <tr>
            <input type="hidden" class="delete_id" value="{{ $kendaraan->id }}">
<<<<<<< HEAD
            <td>{{ $kendaraan->mk_nama_kendaraan }}</td>
            <td>{{ $kendaraan->mk_no_polisi }}</td>
           <td>{{ $kendaraan->mk_jenis }}</td>
            <td>{{ $kendaraan->mk_merk }}</td>
            <td>{{ $kendaraan->mk_warna }}</td>
            <td>{{ $kendaraan->mk_perlengkapan }}</td>
            <td>
              <a class="btn-sm btn-success btn-circle mb-xl-0 mb-2" href="{{ route('master_kendaraan.show',$kendaraan->id) }}"  data-toggle="tooltip" data-placement="left" title="Edit">
                <i class="fa fa-edit"></i>
              </a>
              <a class="btn-sm btn-warning btn-circle mb-xl-0 mb-2" href="{{ route('master_kendaraan.edit',$kendaraan->id) }}"  data-toggle="tooltip" data-placement="left" title="Edit">
=======
            <td class="border-secondary">{{ $kendaraan->mk_nama_kendaraan }}</td>
            <td class="border-secondary">{{ $kendaraan->mk_no_polisi }}</td>
            <td class="border-secondary">{{ $kendaraan->mk_jenis }}</td>
            <td class="border-secondary">{{ $kendaraan->mk_merk }}</td>
            <td class="border-secondary">{{ $kendaraan->mk_warna }}</td>
            <td class="border-secondary">{{ $kendaraan->mk_perlengkapan }}</td>
            <td class="border-secondary">
              <a class="btn-sm btn-warning btn-circle mb-xl-0 mb-1" href="{{ route('master_kendaraan.edit',$kendaraan->id) }}"  data-toggle="tooltip" data-placement="left" title="Edit">
>>>>>>> ee66b3ebd4672cfc08fc12202fc669c27b3fed6e
                <i class="fa fa-edit"></i>
              </a>
              <form action="{{ route('master_kendaraan.destroy',$kendaraan->id) }}" method="post" class="d-inline">
                @csrf
                @method('delete')
                {{-- <input class="btn btn-danger btndelete" type="submit" value="Delete"> --}}
                <a href="" class="btn-sm btn-danger btn-circle mb-xl-0 mb-1 btndelete"  data-toggle="tooltip" data-placement="left" title="Delete">
                  <i class="fas fa-trash"></i>
                </a>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $datakendaraan->links() }}
    </div>
  </div>
</div>
@endsection

