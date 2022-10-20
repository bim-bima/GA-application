 @extends('layouts.main') 
 @section('content')
 @include('sweetalert::alert')

<div class="card shadow mb-4" data-aos="fade-up" data-aos-delay="50">
  <div class="card-header py-3 px-sm-3 px-2">
    <h6 class="m-0 font-weight-bold text-primary" data-aos="fade-right" data-aos-delay="100">Tambahkan User Baru</h6>
  </div>
  
  <div class="card-body px-sm-3 px-2">
    <form action="{{ route('add_user.store') }}" method="POST" enctype="multipart/form-data" class="col-lg-6 px-0">
      @csrf
      <label for="name" class="form-label">Name</label>
      <input type="text" class="mb-2 form-control @error('name') is-invalid @enderror" name="name" required autofocus>
      @error('name')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror

      <label for="email" class="form-label">Email</label>
      <input type="email" class="mb-2 form-control @error('email') is-invalid @enderror" name="email" required autofocus>
      @error('email')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror

      <label for="level" class="form-label">Level User</label>
      <select name="level" required class="mb-2 form-control @error('level') is-invalid @enderror" required>
        <option value="">Pilih Level</option>
        <option value="general-affair">general-affair</option>
        <option value="management">management</option>
      </select>
      @error('level')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror

      <label for="password" class="form-label">Password</label>
      <input type="password" class="mb-2 form-control @error('password') is-invalid @enderror" name="password" required autofocus>
      @error('password')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror

      <label for="password_confirmation" class="form-label">Confirm Password</label>
      <input type="password" class="mb-2 form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autofocus>
      @error('password_confirmation')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror

      <button type="submit" class="btn btn-success mt-3 mb-1">
        <i class="fa fa-edit"></i>
        Tambah
      </button>
    </form>
  </div>

</div>
@endsection

      <!-- 
      <button class="btn btn-info mt-3 mb-1 mr-1">
        <a href="{{ route('home') }}" class="text-white text-decoration-none">
          <i class="fa fa-angle-left"></i>
          Kembali
        </a>
      </button> -->
      

