@extends('layouts.main')
@section('content')
@include('sweetalert::alert')

<div class="card shadow mb-4" data-aos="fade-up" data-aos-delay="50">
  <div class="card-header py-3 px-sm-3 px-2">
    <h6 class="m-0 font-weight-bold text-primary" data-aos="fade-right" data-aos-delay="100">Detail Request</h6>
  </div>
  <div class="card-body px-sm-3 px-2">
    <div class="table-responsive border-dark mb-2">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th class="border border-secondary px-2 col-sm-1">Tanggal</th>
            @if(auth()->user()->level == "general-affair")
            <th class="border border-secondary px-2 col-sm-1">Perequest</th>
            @endif
            <th class="border border-secondary px-2 col-sm-1">Request</th>
            <th class="border border-secondary px-2 col-sm-2">Tingkat Kebutuhan</th>
            <th class="border border-secondary px-2 col-sm-2">Catatan</th>
            <th class="border border-secondary px-2 col-sm-2">Tanggal Estimasi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <?php 
              $tanggal1 = $request->created_at;
              $tanggal = substr($tanggal1,-0,10);
              ?>
            <td class="border-secondary px-2">{{ $tanggal }}</td>
            @if(auth()->user()->level == "general-affair")
            <td class="border-secondary px-2">{{ $request->ar_perequest }}</td>
            @endif
            <td class="border-secondary px-2">{{ $request->ar_request }}</td>
            <td class="border-secondary px-2">{{ $request->ar_kebutuhan }}</td>
            <td class="border-secondary px-2">{{ $request->ar_catatan }}</td>
            <td class="border-secondary px-2">{{ $request->ar_tanggal_estimasi }}</td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="">
      <button class="btn btn-info mb-2">
        <i class="fa fa-angle-left"></i>
        <a href="{{ route('home') }}" class="text-white text-decoration-none">Kembali</a>
      </button>
    </div>
  </div>
</div>
@endsection