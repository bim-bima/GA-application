@extends('layouts.main')

@section('content')

@if(auth()->user()->level == "pegawai")
<div class="card shadow mb-4">
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
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      @endforeach
    </div>
    <button class="btn btn-info mr-1 mt-2 mb-1">
      <i class="fa fa-angle-car"></i>
      <a href="{{ route('app_kendaraan.create') }}"class="text-white text-decoration-none">Booking Kendaraan</a>
    </button>       
  </div>
</div>

      @endif

@endsection

