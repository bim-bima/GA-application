 @extends('layouts.main')
 @section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Edit Status FollowUp</h6>
    </div>
    <div class="card-body">
           <form action="{{ route('master_statusfollowup.update',$statusfollowup->id) }}" method="POST" enctype="multipart/form-data" class="col-lg-6">
           @csrf
           @method('put')
               <label for="msf_status" class="form-label">Nama Status Followup</label>
               <input type="text" class="form-control @error('nama') is-invalid @enderror" name="msf_status" value="{{ $statusfollowup->msf_status }}" required>
                @error('nama')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
           <button type="submit" class="btn btn-primary my-3">Edit</button>
           <button class="btn btn-primary my-3"><a  href="{{ route('master_statusfollowup.index') }}" class="text-white text-decoration-none">kembali</a></button>
       </form>
      </div>
    </div>
@endsection

