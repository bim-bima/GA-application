@extends('layouts.main')

@section('content')

@include('sweetalert::alert')

<div class="card shadow mb-4" data-aos="fade-up" data-aos-delay="50">
  <div class="card-header py-3 px-sm-3 px-2">
    <h6 class="m-0 font-weight-bold text-primary" data-aos="fade-right" data-aos-delay="100">Cek Kendaraan</h6>
    @if(auth()->user()->level == "general-affair")
    @endif
  </div>
  <div class="card-body">
    <div class="row">
      @foreach( $datakendaraan as $ken )
      <div class="col-xl-3 col-sm-6 mb-3 px-0 px-sm-2">
        <div class="card" data-aos="zoom-in" data-aos-delay="100">
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
              <a class="mt-3 btn btn-success mx-2 px-3" href="{{ route('master_kendaraan.show',$ken->id) }}">Detail</a>

              @if(auth()->user()->level == "general-affair")
              <a class="mt-3 btn btn-warning mx-2 px-3" href="{{ route('master_kendaraan.edit',$ken->id) }}">Update</a>
              @endif
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
    @if(auth()->user()->level == "general-affair")
    <button class="btn btn-primary mb-3"> 
      <i class="fa fa-plus"></i>
      <a href="{{ route('app_kendaraan.create') }}" class="text-white text-decoration-none">Tambah</a>
    </button>
    @endif
    <div class="table-responsive">
      @if(auth()->user()->level == "general-affair")
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th class="border border-secondary px-2">Kendaraan</th>
            <th class="border border-secondary px-2">Pengguna</th>
            <th class="border border-secondary px-2">Tanggal</th>
            <th class="border border-secondary px-2">Jam</th>
            <th class="border border-secondary px-2">PIC</th>
            <th class="border border-secondary px-2">Menuju</th>
            <th class="border border-secondary px-2">Tujuan</th>
            <th class="border border-secondary px-2">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($kendaraan as $item)
          <tr>
            <input type="hidden" class="delete_id" value="{{ $item->id }}">
            <td class="border-secondary px-2">{{ $item->namaKendaraan->mk_nama_kendaraan }}</td>
            <td class="border-secondary px-2">{{ $item->ak_pengguna }}</td>
            <td class="border-secondary px-2">{{ $item->ak_tanggal_mulai }}</td>
            <td class="border-secondary px-2">{{ $item->ak_jam }}</td>
            <td class="border-secondary px-2">{{ $item->pic->mp_nama }}</td>
            <td class="border-secondary px-2">{{ $item->ak_lokasi_tujuan }}</td>
            <td class="border-secondary px-2">{{ $item->ak_tujuan_pemakaian }}</td>
            <td class="border-secondary px-2">
              <a class="btn btn-primary btn-circle btn-sm mb-2" href="{{ route('app_kendaraan.show',$item->id) }}"  data-toggle="tooltip" data-placement="left" title="show"> 
                <i class="fas fa-eye"></i>
              </a>
             
              <form action="{{ route('app_kendaraan.destroy',$item->id) }}" method="post" class="d-inline">
                @csrf
                @method('delete')
                {{-- <input class="btn btn-danger btndeleteitem" type="submit" value="Delete"> --}}
                <a href="" class="btn btn-danger btn-circle btn-sm  btndeleteitem mb-2"  data-toggle="tooltip" data-placement="left" title="Delete">
                  <i class="fas fa-trash"></i>
                </a>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $kendaraan->links() }}
      @endif
    </div>
  </div>
</div>
@endsection