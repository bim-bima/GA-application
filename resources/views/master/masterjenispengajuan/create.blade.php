@extends('layouts.main')

@section('content')
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tambah Jenis Pengajuan</h6>
  </div>
  <div class="card-body">
    <form action="{{ route('master_jenispengajuan.store') }}" method="POST" enctype="multipart/form-data" class="col-lg-6">
      @csrf
      <label for="mjp_jenis" class="form-label">Nama Jenis Pengajuan</label>
      <input type="text" class="form-control @error('nama') is-invalid @enderror" name="mjp_jenis" required>
      @error('nama')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
      <button class="btn btn-info my-3 mr-1">
        <i class="fa fa-angle-left"></i>
        <a href="{{ route('master_jenispengajuan.index') }}" class="text-white text-decoration-none">Kembali</a>
      </button>
      <button type="submit" class="btn btn-success my-3">
        <i class="fa fa-plus-circle"></i>
        Tambah
      </button>
    </form>
  </div>
</div>
@endsection


