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
      <label for="name" class="form-label" data-aos="fade-right" data-aos-delay="700">Name</label>
      <input type="text" class="mb-1 form-control @error('name') is-invalid @enderror" name="name" required autofocus data-aos="fade-right" data-aos-delay="800" >
      @error('name')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror

      <label for="email" class="form-label" data-aos="fade-right" data-aos-delay="700"> email</label>
      <input type="email" class="mb-1 form-control @error('email') is-invalid @enderror" name="email" required autofocus data-aos="fade-right" data-aos-delay="800">
      @error('email')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror

      <div class="col-lg-6 mb-3 mb-sm-2">
          <label for="level" class="form-label" data-aos="fade-left" data-aos-delay="850">Level User</label>
          <select name="level" required class="form-control @error('level') is-invalid @enderror" required data-aos="fade-left" data-aos-delay="900">
            <option value="">Pilih Level</option>
            <option value="general-affair">general-affair</option>
            <option value="management">management</option>
          </select>
      @error('level')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror

      <label for="password" class="form-label" data-aos="fade-right" data-aos-delay="700"> Password</label>
      <input type="password" class="mb-1 form-control @error('password') is-invalid @enderror" name="password" required autofocus data-aos="fade-right" data-aos-delay="800">
      @error('password')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror

      <label for="password_confirmation" class="form-label" data-aos="fade-right" data-aos-delay="700">Confirm Password</label>
      <input type="password" class="mb-1 form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autofocus data-aos="fade-right" data-aos-delay="800">
      @error('password_confirmation')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror

<!-- 
      <button class="btn btn-info mt-3 mb-1 mr-1">
        <a href="{{ route('home') }}" class="text-white text-decoration-none">
          <i class="fa fa-angle-left"></i>
          Kembali
        </a>
      </button> -->
      
      <button type="submit" class="btn btn-success mt-3 mb-1">
        <i class="fa fa-edit"></i>
        Tambah
      </button>
    </form>
  </div>

</div>
@endsection

