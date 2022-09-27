@extends('layouts.main')

@section('content')

@include('sweetalert::alert')

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Cek Kendaraan</h6>
      <button class="btn btn-primary mt-3"><a href="{{ route('app_kendaraan.create') }}" class="text-white text-decoration-none">Tambah</a></button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th>kendaraan</th>
                <th>Pengguna</th>
                <th>Tanggal Mulai</th>
                <th>Jam</th>
                <th>PIC</th>
                <th>Kondisi</th>
                <th>Lokasi Tujuan</th>
                <th>Tujuan</th>
                <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($kendaraan as $item)
            <tr>
              <td>{{ $item->namaKendaraan->mk_nama_kendaraan }}</td>
              <td>{{ $item->ak_pengguna }}</td>
              <td>{{ $item->ak_tanggal_mulai }}</td>
              <td>{{ $item->ak_jam }}</td>
              <td>{{ $item->pic->mp_nama }}</td>
              <td>{{ $item->ak_kondisi }}</td>
              <td>{{ $item->ak_lokasi_tujuan }}</td>
              <td>{{ $item->ak_tujuan_pemakaian }}</td>
              <td><a class="btn btn-warning" href="{{ route('app_kendaraan.edit',$item->id) }}">Edit</a>
                <form action="{{ route('app_kendaraan.destroy',$item->id) }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <input class="btn btn-danger" type="submit" value="Delete">
                </form>
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>
       {{ $kendaraan->links() }}

      </div>
    </div>
  </div>
@endsection

