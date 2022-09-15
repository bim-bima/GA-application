 @extends('layouts.main')
 @section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Edit pic</h6>
    </div>
    <div class="card-body">
           <form action="{{ route('master_pic.update',$pic->id) }}" method="POST" enctype="multipart/form-data" class="col-lg-6">
           @csrf
           @method('put')
               <label for="mp_nama" class="form-label">Nama pic</label>
               <input type="text" class="form-control @error('nama') is-invalid @enderror" name="mp_nama" value="{{ $pic->mp_nama }}" required>
                @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
           <button type="submit" class="btn btn-primary my-3">Edit</button>
           <button class="btn btn-primary my-3"><a  href="{{ route('master_pic.index') }}" class="text-white text-decoration-none">kembali</a></button>
       </form>
      </div>
    </div>
@endsection

