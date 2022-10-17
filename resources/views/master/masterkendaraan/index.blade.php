@extends('layouts.main')

@section('content')

@include('sweetalert::alert')

<div class="card shadow mb-4" data-aos="fade-up" data-aos-delay="50">
  <div class="card-header py-3 px-sm-3 px-2">
    <h6 class="m-0 font-weight-bold text-primary" data-aos="fade-right" data-aos-delay="100">Daftar Kendaraan</h6>
    <button class="btn btn-primary mt-2" data-aos="fade-right" data-aos-delay="150">
      <i class="fa fa-plus"></i>
      <a href="{{ route('master_kendaraan.create') }}" class="text-white text-decoration-none">Tambah</a>
    </button>
  </div>
  <div class="card-body px-sm-3 px-1">
    <div class="table-responsive">
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
            <td class="border-secondary">{{ $kendaraan->mk_nama_kendaraan }}</td>
            <td class="border-secondary">{{ $kendaraan->mk_no_polisi }}</td>
            <td class="border-secondary">{{ $kendaraan->mk_jenis }}</td>
            <td class="border-secondary">{{ $kendaraan->mk_merk }}</td>
            <td class="border-secondary">{{ $kendaraan->mk_warna }}</td>
            <td class="border-secondary">{{ $kendaraan->mk_perlengkapan }}</td>
            <td class="border-secondary">
              <a class="btn-sm btn-warning btn-circle mb-xl-0 mb-1" href="{{ route('master_kendaraan.edit',$kendaraan->id) }}"  data-toggle="tooltip" data-placement="left" title="Edit">
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
      @endif
    </div>
  </div>
</div>
@endsection

