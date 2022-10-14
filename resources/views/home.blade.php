@extends('layouts.main')

@section('content')


<div class="card shadow mb-4">
<<<<<<< HEAD
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Dashboard</h6>
    </div>
    <div class="card-body">
      <div class="row">

      @if(auth()->user()->level == "general-affair")
      <h6 class="m-0 font-weight-bold text-primary">Aktivitas Hari Ini</h6>
        <table class="table table-bordered border" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>Aktivitas</th>
            <th>Prioritas</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($aktivitas as $today)
          <tr>
            <td>{{ $today->title }}</td>
            <td>{{ $today->prioritas }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      @endif


@if(auth()->user()->level == "pegawai")
        @foreach ($datakendaraan as $kendaraan)
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">{{ $kendaraan->mk_nama_kendaraan }}</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $kendaraan->mk_status }}</div>
                    </div>
                    <div class="col-auto">
                       <a class="btn-sm btn-info btn-circle mb-xl-0 mb-1" href="{{ route('master_kendaraan.show',$kendaraan->id) }}"  data-toggle="tooltip" data-placement="left" title="Info">
                  <i class="fas fa-info-circle"></i>
                </a>
              <!--   <a class="btn-sm btn-success btn-circle mb-xl-0 mb-2" href="{{ route('master_kendaraan.edit',$kendaraan->id) }}"  data-toggle="tooltip" data-placement="left" title="Show">
                <i class="fa fa-edit"></i>
              </a> -->
                    </div>
                  </div>
=======
  <div class="card-header py-3 px-sm-3 px-2">
    <h6 class="m-0 font-weight-bold text-primary">Dashboard</h6>
  </div>
  <div class="card-body">
    <div class="row">
      @foreach ($datakendaraan as $kendaraan)
      <div class="col-xl-3 col-md-6 mb-3 px-0 px-md-2">
        <div class="card shadow-sm">
          <div class="card-body px-2">
            <div class="row">
              <div class="col-12 mb-1">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">{{ $kendaraan->mk_nama_kendaraan }}</div>
              </div>                      
              <div class="col-12 mb-2 px-4">
                <div class="row justify-content-between">
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $kendaraan->mk_status }}</div>
                  <!-- <i class="fas fa-calendar fa-2x text-gray-300"></i> -->
                    <a class="btn-sm btn-info btn-circle" href="{{ route('app_kendaraan.show',$kendaraan->id) }}"  data-toggle="tooltip" data-placement="left" title="Info">
                    <i class="fas fa-info-circle"></i>
                  </a>
>>>>>>> ee66b3ebd4672cfc08fc12202fc669c27b3fed6e
                </div>
              </div>
            </div>
        @endforeach
    </div>

        <div class="card mb-4 col-lg-6">
          <div class="">
            <h6 class="m-3 font-weight-bold text-primary">Riwayat Booking</h6>
          </div>
          <div class="card-body">
            <div class="row">
              <table class="table table-bordered border" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Kendaraan</th>
                    <th>Tanggal</th>
                    <th>Detail</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($booking as $riwayat)
                  <tr>
                    <td>{{ $riwayat->namaKendaraan->mk_nama_kendaraan }}</td>
                    <td>{{ $riwayat->ak_tanggal_mulai }}</td>
                    <td> 
                      <a class="btn-sm btn-info btn-circle mb-xl-0 mb-1" href="{{ route('app_kendaraan.show',$riwayat->id) }}"  data-toggle="tooltip" data-placement="left" title="Info">
                      <i class="fas fa-info-circle"></i>
                      </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
<<<<<<< HEAD
                <button class="btn btn-info my-3 mr-1">
              <i class="fa fa-angle-car"></i>
              <a href="{{ route('app_kendaraan.create') }}"class="text-white text-decoration-none">Booking Kendaraan</a>
            </button>
            
=======
      </div>
      
      @endforeach
    </div>
    <button class="btn btn-info mr-1 mt-2 mb-1">
      <i class="fa fa-angle-car"></i>
      <a href="{{ route('app_kendaraan.create') }}"class="text-white text-decoration-none">Booking Kendaraan</a>
    </button>       
  </div>
</div>

>>>>>>> ee66b3ebd4672cfc08fc12202fc669c27b3fed6e
      @endif
  </div>
  </div>


@endsection

