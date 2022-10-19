@extends('layouts.main')
@section('content')
@include('sweetalert::alert')

<div class="card shadow mb-4" data-aos="fade-up" data-aos-delay="50">
  <div class="card-header py-3 px-sm-3 px-2">
    <h6 class="m-0 font-weight-bold text-primary" data-aos="fade-right" data-aos-delay="100">Detail Request</h6>
  </div>
    <div class="table-responsive col-md-12 border-dark">
        <table class="table table-bordered mt-3" id="dataTable" width="100%" cellspacing="0" data-aos="zoom-in" data-aos-delay="600">
          <thead class="">
            <tr>
              <th class="border border-secondary col-sm-3 col-3">Tanggal</th>
              @if(auth()->user()->level == "general-affair")
              <th class="border border-secondary col-sm-3 col-3">Perequest</th>
              @endif
              <th class="border border-secondary col-sm-3 col-3">Request</th>
              <th class="border border-secondary col-sm-3 col-3">Tingkat Kebutuhan</th>
              <th class="border border-secondary col-sm-5 col-3">Catatan</th>
              <th class="border border-secondary col-sm-3 col-3">Tanggal Estimasi</th>
            </tr>
          </thead>
          <tbody class="border-top-0">
            <tr>
              <?php 
                $tanggal1 = $request->created_at;
                $tanggal = substr($tanggal1,-0,10);
               ?>
              <td class="border-secondary">{{ $tanggal }}</td>
              @if(auth()->user()->level == "general-affair")
              <td class="border-secondary">{{ $request->ar_perequest }}</td>
              @endif
              <td class="border-secondary">{{ $request->ar_request }}</td>
              <td class="border-secondary">{{ $request->ar_kebutuhan }}</td>
              <td class="border-secondary">{{ $request->ar_catatan }}</td>
              <td class="border-secondary">{{ $request->ar_tanggal_estimasi }}</td>
            </tr>
          </tbody>
        </table>
        <div class="col-1 py-2">
      <button class="btn btn-info mt-3 mb-3 mr-1">
        <i class="fa fa-angle-left"></i>
        <a href="{{ route('home') }}" class="text-white text-decoration-none">Kembali</a>
      </button>
    </div>
      </div>
</div>
@endsection