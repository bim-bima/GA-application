@extends('layouts.main')

@section('content')

@include('sweetalert::alert')

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">List Aktivitas</h6>

      <button class="btn btn-primary mt-3">
        <i class="fas fa-download"></i>
        <a href="{{ url('downloadlist') }}" class="text-white text-decoration-none">Unduh</a>
      </button>
    </div>
    <div class="card-body">
      <div class="table-responsive">

      <?php 
        use App\Models\Aktivitas;
        $listaktivitas = Aktivitas::paginate(10);


       ?>        
       <table class="table table-bordered border" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th>Tanggal</th>
                <th>Aktivitas</th>
                <th>Prioritas</th>
                <th>Deskripsi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($list as $listaktivitas)
            <tr>
              <td>{{ $listaktivitas->start_date }}</td>
              <td>{{ $listaktivitas->title }}</td>
              <td>{{ $listaktivitas->prioritas }}</td>
              <td>{{ $listaktivitas->deskripsi }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  
@endsection
{{-- {{ $listaktivitas ->links() }} --}}
