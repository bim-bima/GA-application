@extends('layouts.main')

@section('content')

@include('sweetalert::alert')

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Asset</h6>
    </div>
    <div id="grafik" class="card-body col-lg-9">
    <?php   
          for ( $i=$t;  $i<=$ta;  $i++ ){
            echo $i;

            ?><span>_</span><?php
            }
     ?>  
    </div>





    <!-- <div class="card-body col-lg-3">
        <ol class="list-group list-group-numbered">
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fs-6"><small>Nama Asset :</small></div>
      <b>{{ $asset->as_nama_asset }}</b>
    </div>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fs-6"><small>Lokasi Asset :</small></div>
      <b>{{ $asset->lokasiAsset->mla_lokasi_asset }}</b>
    </div>
  </li>
   <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fs-6"><small>Tahun kepemilikan :</small></div>
      <b>{{ $asset->as_tahun_kepemilikan }}</b>
    </div>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fs-6"><small>Kode Asset :</small></div>
      <b>{{ $asset->as_kode_asset }}</b>
    </div>
  </li>
   <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fs-6"><small>Harga Asset :</small></div>
      <b>{{ $asset->as_harga }}</b>
    </div>
  </li> <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fs-6"><small>Nilai Residu :</small></div>
      <b>{{ $asset->as_nilai_residu }}</b>
    </div>
  </li>
   <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
      <div class="fs-6"><small>Umur Manfaat :</small></div>
      <b>{{ $asset->as_umur_manfaat }}</b>
    </div>
  </li>
</ol>
    </div> -->
  </div>

<script src="https://code.highcharts.com/highcharts.js"></script>
<script type="text/javascript">
  
</script>

@endsection

