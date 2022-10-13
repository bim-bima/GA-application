 @extends('layouts.main')
 @section('content')
<div class="card shadow mb-4">
  <div class="card-header py-3 px-sm-3 px-2">
    <h6 class="m-0 font-weight-bold text-primary">Edit Aktivitas</h6>
  </div>
  <div class="card-body px-sm-3 px-2">
    <form action="{{ route('master_aktivitas.update',$aktivitas->id) }}" method="POST" enctype="multipart/form-data" class="col-lg-6 px-0">
      @csrf
      @method('put')
      <label for="ma_nama_aktivitas" class="form-label">Nama Aktivitas</label>
      <input type="text" class="mb-1 form-control @error('nama') is-invalid @enderror" name="ma_nama_aktivitas" value="{{ $aktivitas->ma_nama_aktivitas }}" required>
      @error('nama')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
      <button class="btn mt-3 btn-info mr-1 mb-1">
      <i class="fa fa-angle-left"></i>
      <a href="{{ route('master_aktivitas.index') }}" class="text-white text-decoration-none">Kembali</a>
      </button>
      <button type="submit" class="btn btn-success mt-3 mb-1">
        <i class="fa fa-edit"></i>
        Edit
      </button>
    </form>
  </div>
</div>
@endsection

