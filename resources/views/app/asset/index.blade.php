@extends('layouts.main')

@section('content')

@include('sweetalert::alert')

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Daftar Asset</h6>
      <button class="btn btn-primary mt-3"><a href="{{ route('app_asset.create') }}" class="text-white text-decoration-none">Tambah</a></button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th>Nama Asset</th>
                <th>Lokasi Asset</th>
                <th>Tahun milikan</th>
                <th>Kode Asset</th>
                <th>Harga Asset</th>
                <th>Nilai Residu</th>
                <th>Umur Manfaat</th>
                <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($dataasset as $asset)
            <tr>
              <input type="hidden" class="delete_id" value="{{ $asset->id }}">
              <td>{{ $asset->as_nama_asset }}</td>
              <td>{{ $asset->lokasiAsset->mla_lokasi_asset }}</td>
              <td>{{ $asset->as_tahun_kepemilikan }}</td>
              <td>{{ $asset->as_kode_asset }}</td>
              <td>{{ $asset->as_harga }}</td>
              <td>{{ $asset->as_nilai_residu }}</td>
              <td>{{ $asset->as_umur_manfaat }}</td>
              <td>
                <a class="btn btn-info" href="{{ route('app_asset.show',$asset->id) }}">Detail</a>
                <a class="btn btn-warning" href="{{ route('app_asset.edit',$asset->id) }}">Edit</a>
                <form action="{{ route('app_asset.destroy',$asset->id) }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <input class="btn btn-danger btndeleteasset" type="submit" value="Delete">
                </form>
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>
       {{ $dataasset->links() }}

      </div>
    </div>
  </div>
@endsection

