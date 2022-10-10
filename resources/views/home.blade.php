@extends('layouts.main')

@section('content')

@if(auth()->user()->level == "pegawai")
<div class="card shadow mb-4 col-md-6">
  <div class="card-header py-3 p-0">
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

