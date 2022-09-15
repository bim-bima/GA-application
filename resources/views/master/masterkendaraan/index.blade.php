@extends('layouts.main')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Daftar Kendaraan</h6>
      <button class="btn btn-primary mt-3"><a href="/master_kendaraan/create" class="text-white">Tambah Kendaraan</a></button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th>nama kendaraan</th>
                <th>aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($masterKendaraan as $item)
            <tr>
              {{-- <td>{{ $as->masset->ma_nama_asset }}</td> --}}
              <td>{{ $item->mk_nama_kendaraan }}</td>
              <td><a class="btn btn-warning" href="/master_kendaraan/{{ $item->id }}/edit">edit</a>
                <form action="/master_kendaraan/{{ $item->id }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <input class="btn btn-danger" type="submit" value="delete">
                </form>
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{-- {{ $asset->links() }} --}}

      </div>
    </div>
  </div>
@endsection

