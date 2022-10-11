@extends('layouts.main')

@section('content')

@if(auth()->user()->level == "pegawai")
<div class="row px-sm-3 px-0">
  <div class="card shadow mb-4 col-md-6 px-0">
    <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Buat Request</h6>
    </div>
    <div class="card-body">
      <div class="row">
        <div class="col-10 border-dark">
          <form action="{{ route('app_request.store') }}" method="POST" enctype="multipart/form-data" class="">
            @csrf
            <label for="ar_request" class="form-label">Request</label>
            <input type="text" class="mb-2 form-control @error('request') is-invalid @enderror" name="ar_request" required>
            @error('request')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <label for="ar_catatan" class="form-label">Catatan</label>
            <textarea type="text" class="form-control @error('catatan') is-invalid @enderror" name="ar_catatan" required rows="3"></textarea>
            @error('catatan')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            <button type="submit" class="btn btn-success my-3">
              Kirim Request
              <i class="fa fa-paper-plane"></i>
            </button>
          </form>
        </div>
        </div>
     </div>
  </div>
</div>

      @endif

@endsection

