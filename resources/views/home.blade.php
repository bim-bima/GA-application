@extends('layouts.main')

@section('content')


<div class="card shadow mb-4">
    @if(auth()->user()->level == "general-affair")
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Dashboard</h6>
    </div>
    <div class="card-body px-sm-4">
      <div class="row px-sm-1">
        <h6 class="font-weight-bold text-primary">Aktivitas Hari Ini</h6>
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
      </div>
    </div>
    @endif

    @if(auth()->user()->level == "pegawai")
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Dashboard</h6>
      </div>
      <div class="row">
        <div class="card-body col-lg-6 pr-lg-2 pb-0 pl-lg-4">
          <div class="row">
            @foreach ($datakendaraan as $kendaraan)
            <div class="col-6 pr-0">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-12 mb-1 px-1">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">{{ $kendaraan->mk_nama_kendaraan }}</div>
                    </div>                      
                    <div class="col-12 mb-1 px-3">
                      <div class="row justify-content-between">
                        <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $kendaraan->mk_status }}</div>
                        <a class="btn-sm btn-info btn-circle" href="{{ route('master_kendaraan.show',$kendaraan->id) }}"  data-toggle="tooltip" data-placement="left" title="Info">
                          <i class="fas fa-eye"></i>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        <div class="card-body col-lg-6 pl-lg-3 pr-lg-4">
          <div class="card">
            <div class="card-header">
              <h6 class="font-weight-bold text-primary">Riwayat Booking</h6>
            </div>
            <div class="card-body">
              <div class="row">
                <table class="table table-bordered border" id="dataTable" cellspacing="0">
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
        </div>             
        <div class="card-body col-12 pt-2 pl-lg-4">
          <button class="btn btn-info mr-1 mb-1">
            <i class="fa fa-angle-car"></i>
            <a href="{{ route('app_kendaraan.create') }}"class="text-white text-decoration-none">Booking Kendaraan</a>
          </button>   
        </div>  
      </div>
        @endif
</div>
@endsection
