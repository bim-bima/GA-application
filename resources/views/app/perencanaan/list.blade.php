@extends('layouts.main')
@section('content')
@include('sweetalert::alert')

<div class="card shadow mb-4" data-aos="fade-up" data-aos-delay="100">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary" data-aos="fade-right" data-aos-delay="600">List Aktivitas</h6>
    <button class="btn btn-info mt-3" data-aos="fade-right" data-aos-delay="650">
      <i class="fas fa-angle-left"></i>
      <a href="{{ route('app_perencanaan.index') }}" class="text-white text-decoration-none">Kembali</a>
    </button>
    <button class="btn btn-success mt-3" data-aos="fade-left" data-aos-delay="650">
      <i class="fas fa-download"></i>
      <a href="{{ url('downloadlist') }}" class="text-white text-decoration-none">Unduh</a>
    </button>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <?php 
      // use App\Models\Aktivitas;
      // $listaktivitas = Aktivitas::paginate(10);
          // echo $mytime->toDateString();
      
      ?>        
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" data-aos="zoom-in" data-aos-delay="650">

      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th class="border border-secondary">Tanggal</th>
            <th class="border border-secondary">Aktivitas</th>
            <th class="border border-secondary">Prioritas</th>
            <th class="border border-secondary">Deskripsi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($list as $listaktivitas)
          <tr>
            <td class="border-secondary">{{ $listaktivitas->start_date }}</td>
            <td class="border-secondary">{{ $listaktivitas->title }}</td>
            <td class="border-secondary">{{ $listaktivitas->prioritas }}</td>
            <td class="border-secondary">{{ $listaktivitas->deskripsi }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{-- {{ $listaktivitas->links() }} --}}
    </div>
  </div>
</div>
@endsection
