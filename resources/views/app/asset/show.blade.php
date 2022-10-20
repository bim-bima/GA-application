@extends('layouts.main')

@section('content')

@include('sweetalert::alert')

<div class="card shadow mb-4" data-aos="fade-up" data-aos-delay="50">
  <div class="card-header px-sm-3 px-2">
    <h6 class="m-0 font-weight-bold text-primary" data-aos="fade-right" data-aos-delay="100">Asset</h6>
  </div>
  <?php   
        $tahunawal = $asset->as_tahun_kepemilikan; 
        $tahunakhir = $tahunawal + $asset->as_umur_manfaat;
        $harga = $asset->as_harga;
        $umur = $asset->as_umur_manfaat;
        $penurunan1 = $harga / $umur;

        $penurunan = array();  
        for ( $p=$harga; $p>=0; $p-=$penurunan1 ){
            $penurunan[] = array($p);
          }
          
        $tahun = array();  
        for ( $i=$tahunawal;  $i<=$tahunakhir;  $i++ ){
            $tahun[] = array($i);
        }
  ?>  
  <div class="container p-0">
    <div class="row">
      <div class="card-body col-xl-9 pr-xl-1 px-3 pb-0" data-aos="fade-right" data-aos-delay="150">
        <canvas id="grafik"></canvas>
        <script>
          var ctx = document.getElementById("grafik").getContext('2d');
          var grafik = new Chart(ctx, {
            type: 'bar',
            data: {
              labels: {{ json_encode($tahun) }},
              // labels: ["kopi","susu","kopi","teh"],
                datasets: [{
                label: 'Penyusutan {{ $asset->as_nama_asset }}',
                data: {{ json_encode($penurunan) }},
                backgroundColor: 'rgba(255, 159, 64)' ,
                borderColor: 'black',
                
                borderWidth:1
              }]
            },
            options: {
              scales: {
                yAxes: [{
                  ticks: {
                    beginAtZero:true
                  }
                }]
              }
            }
          });
        </script> 
      </div>
      <div class="card-body col-xl-3 mt-xl-2 pl-xl-0 pr-xl-4 pb-0" data-aos="fade-left" data-aos-delay="150">
        <ol class="list-group list-group-numbered">
          <li class="list-group-item d-flex justify-content-between align-items-start pb-0">
          <div class="">
              <div class="text-primary font-weight-bold">Nama Asset :</div>
              <b>{{ $asset->as_nama_asset }}</b>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-start pb-0">
            <div class="mr-auto">
              <div class="text-primary font-weight-bold">Lokasi Asset :</div>
              <b>{{ $asset->lokasiAsset->mla_lokasi_asset }}</b>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-start pb-0">
            <div class="mr-auto">
              <div class="text-primary font-weight-bold">Category Asset :</div>
              <b>{{ $asset->categoryasset->mca_category }}</b>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-start pb-0">
            <div class="mr-auto">
              <div class="text-primary font-weight-bold">Tahun Kepemilikan :</div>
              <b>{{ $asset->as_tahun_kepemilikan }}</b>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-start pb-0">
            <div class="mr-auto">
              <div class="text-primary font-weight-bold">Kode Asset :</div>
              <b>{{ $asset->as_kode_asset }}</b>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-start pb-0">
            <?php 
            $harga1 = $asset->as_harga;
            $harga = number_format($harga1,0,",",",");
           ?>
            <div class="mr-auto">
              <div class="text-primary font-weight-bold">Harga Asset :</div>
              <b>{{ $harga }}</b>
            </div>
          </li> 
          <!-- <li class="list-group-item d-flex justify-content-between align-items-start pb-0 pt-1">
            <div class="ms-2 me-auto">
              <div class="fs-6"><small>Nilai Residu :</small></div>
              <b>{{ $asset->as_nilai_residu }}</b>
            </div>
          </li>-->
          <li class="list-group-item d-flex justify-content-between align-items-start pb-0 pt-1">
            <div class="pb-2">
              <div class="text-primary font-weight-bold">Umur Manfaat :</div>
              <b>{{ $asset->as_umur_manfaat }} tahun</b>
            </div>
          </li>
        </ol>
      </div>
    </div>
    <div class="col-1 py-2">
      <button class="btn btn-info mt-3 mb-3 mr-1">
        <i class="fa fa-angle-left"></i>
        <a href="{{ route('app_asset.index') }}" class="text-white text-decoration-none">Kembali</a>
      </button>
    </div> 
  </div>
</div>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script></script>

@endsection
