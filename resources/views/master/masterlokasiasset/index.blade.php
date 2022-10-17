@extends('layouts.main')

@section('content')

@include('sweetalert::alert')

<div class="card shadow mb-4" data-aos="fade-up" data-aos-delay="50">
  <div class="card-header py-3 px-sm-3 px-2">
    <h6 class="m-0 font-weight-bold text-primary" data-aos="fade-right" data-aos-delay="100">Daftar Lokasi Asset</h6>
    <button class="btn btn-primary mt-2" data-aos="fade-right" data-aos-delay="150">
      <i class="fa fa-plus"></i>
      <a href="{{ route('master_lokasiasset.create') }}" class="text-white text-decoration-none">Tambah</a>
    </button>
  </div>
  <div class="card-body px-sm-3 px-1">
    <div class="row">
      @if($cek == 0)
      <div class="col">
        <div class="card border-danger mb-2">
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <div class="font-weight-bold text-primary text-uppercase text-center">
                  <i class="fas fa-info-circle"></i>
                  Belum Ada Data Disini
                  <i class="fas fa-info-circle"></i>
                </div>
              </div>                      
            </div>
          </div>
        </div>
      </div>
      @endif

      @if($cek > 0)
      <div class="table-responsive col-xl-7">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th class="border border-secondary col-4 col-sm-7 col-md-9">Nama Lokasi Asset</th>
              <th class="border border-secondary col-4 col-sm-2">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($datalokasiasset as $lokasiasset)
            <tr>
              <input type="hidden" class="delete_id" value="{{ $lokasiasset->id }}">
              <td class="border-secondary">{{ $lokasiasset->mla_lokasi_asset }}</td>
              <td class="border-secondary">
                <a class="btn-sm btn-warning btn-circle mb-sm-0 mb-1" href="{{ route('master_lokasiasset.edit',$lokasiasset->id) }}" data-toggle="tooltip" data-placement="left" title="Edit">
                  <i class="fas fa-edit"></i>
                </a>
                <form action="{{ route('master_lokasiasset.destroy',$lokasiasset->id) }}" method="post" class="d-inline">
                  @csrf
                  @method('delete')
                  {{-- <input class="btn btn-danger btndelete8" type="submit" value="Delete"> --}}
                  <a href="" class="btn-sm btn-danger btn-circle btndelete8 mb-sm-0 mb-1" data-toggle="tooltip" data-placement="left" title="Delete">
                    <i class="fas fa-trash"></i>
                  </a>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $datalokasiasset->links() }}
      </div>
      @endif
    </div>
  </div>
</div>
@endsection

