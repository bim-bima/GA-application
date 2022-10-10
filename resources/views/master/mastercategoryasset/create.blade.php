@extends('layouts.main')

@section('content')
<div class="card shadow mb-4 p-0">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tambah Category Asset</h6>
  </div>
  <div class="card-body px-0 px-sm-2">
    <form action="{{ route('master_categoryasset.store') }}" method="POST" enctype="multipart/form-data" class="col-lg-6">
      @csrf
      <label for="mca_category" class="form-label">Nama Category</label>
      <input type="text" class="form-control @error('nama') is-invalid @enderror" name="mca_category" required>
      @error('nama')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
      <label for="mca_id_category" class="form-label">Id Category</label>
      <input type="text" class="form-control @error('idcategory') is-invalid @enderror" name="mca_id_category" required>
      @error('idcategory')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
      <button class="btn btn-info my-3 mr-1">
        <i class="fa fa-angle-left"></i>
        <a href="{{ route('master_categoryasset.index') }}" class="text-white text-decoration-none">Kembali</a>
      </button>
      <button type="submit" class="btn btn-success my-3">
        <i class="fa fa-plus-circle"></i>
        Tambah
      </button>
    </form>
  </div>
</div>
@endsection


