@extends('layouts.main')

@section('content')

@include('sweetalert::alert')

<div class="card shadow mb-4">
  <div class="card-header py-3 px-sm-3 px-2">
    <h6 class="m-0 font-weight-bold text-primary">Cek Kendaraan</h6>
    @if(auth()->user()->level == "general-affair")
    <!-- <button class="btn btn-primary mt-3"> 
      <i class="fa fa-plus"></i>
      <a href="{{ route('app_kendaraan.create') }}" class="text-white text-decoration-none">Tambah</a>
    </button> -->
    @endif
  </div>
  <div class="card-body">
    <div class="row">
      @foreach( $datakendaraan as $ken )
      <div class="col-xl-3 col-sm-6 mb-3 px-0 px-sm-2">
        <div class="card">
          <div class="card-header py-2">
            <h6 class="m-0 font-weight-bold text-primary text-center">{{ $ken->mk_nama_kendaraan }}</h6>
          </div>
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="text-xs font-weight-bold text-primary text-uppercase ">Status</div>
                <div class=" h5 mb-0 font-weight-bold text-gray-800">
                {{$ken->mk_status}}
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
              <a class="mt-3 btn btn-success mx-2 px-3" href="{{ route('app_kendaraan.show',$ken->id) }}">Detail</a>
              @if(auth()->user()->level == "general-affair")
              <a class="mt-3 btn btn-warning mx-2 px-3" href="{{ route('master_kendaraan.edit',$ken->id) }}">Update</a>
              @endif
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    <div class="row">
      <div class="col-12 px-1 px-sm-2">
        <div class="table-responsive">
          <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th class="border border-secondary">Kendaraan</th>
                <th class="border border-secondary">Pengguna</th>
                <th class="border border-secondary">Tanggal</th>
                <th class="border border-secondary">Jam</th>
                <th class="border border-secondary">PIC</th>
                <th class="border border-secondary">Kondisi</th>
                <th class="border border-secondary">Menuju</th>
                <th class="border border-secondary">Tujuan</th>
                @if(auth()->user()->level == "general-affair")
                <th class="border border-secondary">Aksi</th>
                @endif
              </tr>
            </thead>
            <tbody>
              @foreach ($kendaraan as $item)
              <tr>
                <input type="hidden" class="delete_id" value="{{ $item->id }}">
                <td class="border-secondary">{{ $item->namaKendaraan->mk_nama_kendaraan }}</td>
                <td class="border-secondary">{{ $item->ak_pengguna }}</td>
                <td class="border-secondary">{{ $item->ak_tanggal_mulai }}</td>
                <td class="border-secondary">{{ $item->ak_jam }}</td>
                <td class="border-secondary">{{ $item->pic->mp_nama }}</td>
                <td class="border-secondary">{{ $item->ak_kondisi }}</td>
                <td class="border-secondary">{{ $item->ak_lokasi_tujuan }}</td>
                <td class="border-secondary">{{ $item->ak_tujuan_pemakaian }}</td>
                @if(auth()->user()->level == "general-affair")
                <td class="border-secondary">
                  <!-- <a class="btn btn-warning btn-circle btn-sm mb-xxl-0 mb-2" href="{{ route('app_kendaraan.edit',$item->id) }}"  data-toggle="tooltip" data-placement="left" title="Edit"> 
                    <i class="fa fa-edit"></i>
                  </a>
                  -->
                  <form action="{{ route('app_kendaraan.destroy',$item->id) }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    {{-- <input class="btn btn-danger btndeleteitem" type="submit" value="Delete"> --}}
                    <a href="" class="btn btn-danger btn-circle btn-sm  btndeleteitem mb-xxl-0 mb-2" data-toggle="tooltip" data-placement="left" title="Delete">
                      <i class="fas fa-trash"></i>
                    </a>
                  </form>
                </td>
                @endif
              </tr>
              @endforeach
            </tbody>
          </table>
          {{ $kendaraan->links() }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection