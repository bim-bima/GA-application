@extends('layouts.main')

@section('content')

@include('sweetalert::alert')

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Cek Kendaraan</h6>
      <button class="btn btn-primary mt-3">
        <i class="fa fa-plus"></i>
        <a href="{{ route('app_kendaraan.create') }}" class="text-white text-decoration-none">Tambah</a>
      </button>
    </div>
    <div class="card-body">
                 @foreach ($datakendaraan as $ken)
                <!-- Card Header - Accordion -->
                <!-- d-flex flex-row align-items-center justify-content-between -->
                <div class="card shadow mb-4 col-md-12 d-flex justify-content-between p-0">
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-primary">{{ $ken->mk_nama_kendaraan }}</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                  <div class="card-body">
                     <li class="list-unstyled">
                      <i class="fa fa-leaf mr-3"> </i>
                    <span> {{ $ken->mk_nama_kendaraan}} </span></a>
                    </li>
                    <li class="list-unstyled">
                      <i class="fa fa-leaf mr-3"> </i>
                    <span> {{ $ken->mk_no_polisi }} </span></a>
                    </li>
                    <li class="list-unstyled">
                      <i class="fa fa-leaf mr-3"> </i>
                    <span> {{ $ken->mk_merk }} </span></a>
                    </li>
                    <li class="list-unstyled">
                      <i class="fa fa-leaf mr-3"> </i>
                    <span> {{ $ken->mk_warna }} </span></a>
                    </li>
                    <li class="list-unstyled">
                      <i class="fa fa-leaf mr-3"> </i>
                    <span> {{ $ken->mk_jenis }} </span></a>
                    </li>
                    <li class="list-unstyled mt-3">
                      <button class="btn-circle btn-sm btn-primary"></button>
                    </li>
                  
                  </div>
                </div>
              </div>
                 @endforeach
               

      


      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th>Kendaraan</th>
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
              <input type="hidden" class="delete_id" value="{{ $item->id }}">
              <td>{{ $item->namaKendaraan->mk_nama_kendaraan }}</td>
              <td>{{ $item->ak_pengguna }}</td>
              <td>{{ $item->ak_tanggal_mulai }}</td>
              <td>{{ $item->ak_jam }}</td>
              <td>{{ $item->pic->mp_nama }}</td>
              <td>{{ $item->ak_kondisi }}</td>
              <td>{{ $item->ak_lokasi_tujuan }}</td>
              <td>{{ $item->ak_tujuan_pemakaian }}</td>
              <td>
                <a class="btn btn-warning btn-circle" href="{{ route('app_kendaraan.edit',$item->id) }}">
                  <i class="fa fa-edit"></i>
                </a>
                <form action="{{ route('app_kendaraan.destroy',$item->id) }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    {{-- <input class="btn btn-danger btndeleteitem" type="submit" value="Delete"> --}}
                    <a href="" class="btn btn-danger btn-circle btndeleteitem">
                      <i class="fas fa-trash"></i>
                    </a>
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

