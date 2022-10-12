@extends('layouts.main')

@section('content')

@include('sweetalert::alert')

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Daftar Vendor</h6>
    <button class="btn btn-primary mt-2">
      <i class="fa fa-plus"></i>
      <a href="{{ route('master_vendor.create') }}" class="text-white text-decoration-none">Tambah</a>
    </button>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Nama Vendor</th>
            <th>Lokasi Vendor</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($datavendor as $vendor)
          <tr>
            <input type="hidden" class="delete_id" value="{{ $vendor->id }}">
            <td>{{ $vendor->mv_nama_vendor }}</td>
            <td>{{ $vendor->mv_lokasi }}</td>
            <td>
              <a class="btn btn-warning btn-circle mb-lg-0 mb-2" href="{{ route('master_vendor.edit',$vendor->id) }}" data-toggle="tooltip" data-placement="left" title="Edit">
                <i class="fas fa-edit"></i>
              </a>
              <form action="{{ route('master_vendor.destroy',$vendor->id) }}" method="post" class="d-inline">
                @csrf
                @method('delete')
                {{-- <input class="btn btn-danger btndelete4" type="submit" value="Delete"> --}}
                <a href="" class="btn btn-danger btn-circle mb-lg-0 mb-2 btndelete4" data-toggle="tooltip" data-placement="left" title="Delete">
                  <i class="fas fa-trash"></i>
                </a>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $datavendor->links() }}
    </div>
  </div>
</div>
@endsection

