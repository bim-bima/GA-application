@extends('layouts.main')
@section('content')
@include('sweetalert::alert')

@if(auth()->user()->level == "general-affair")
<div class="card shadow mb-4">
  <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar Request</h6>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="table-responsive col-md-8 border-dark">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead class="">
            <tr>
              <th class="col-sm-5 col-3 ">Request</th>
              <th class="col-sm-5 col-3 ">Catatan</th>
              <th class="col-3">Aksi</th>
            </tr>
          </thead>
          <tbody class="border-top-0">
            @foreach ($datarequest as $request)
            <tr>
              <input type="hidden" class="delete_id" value="{{ $request->id }}">
              <td>{{ $request->ar_request }}</td>
              <td>{{ $request->ar_catatan }}</td>
              <td>
                <form action="{{ route('app_request.destroy',$request->id) }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    {{-- <input class="btn btn-danger btndelete2" type="submit" value="Delete"> --}}
                    <a href="" class="btn btn-danger btn-circle mb-sm-0 mb-2 btndelete2">
                      <i class="fas fa-trash"></i>
                    </a>
                </form>
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $datarequest->links() }}
  </div>
      </div>
   </div>
  </div>
@endif

@if(auth()->user()->level == "pegawai")
<div class="card shadow mb-4">
  <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Buat Request</h6>
  </div>
  <div class="card-body">
    <div class="row">
      <div class="table-responsive col-md-8 border-dark">
    <form action="{{ route('app_request.store') }}" method="POST" enctype="multipart/form-data" class="col-lg-6">
      @csrf
      <label for="ar_request" class="form-label">Request</label>
      <input type="text" class="form-control @error('request') is-invalid @enderror" name="ar_request" required>
      @error('request')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror

      <label for="ar_catatan" class="form-label">Catatan</label>
      <input type="text" class="form-control @error('catatan') is-invalid @enderror" name="ar_catatan" required>
      @error('catatan')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
      <button type="submit" class="btn btn-success my-3">
        <i class="fa fa-plus-circle"></i>
        Kirim
      </button>
    </form>
  </div>
      </div>
   </div>
  </div>
@endif


@endsection

