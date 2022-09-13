@extends('layouts.main')

@section('content')
<div class="container">
     <h1>monitoring kendaraan</h1>

     <form action="/monitoring-kendaraan/store" method="post" class="col-lg-6">
        @csrf
          <div class="">
            <label for="kendaraan" class="form-label">kendaraan</label>
            <input type="text" class="form-control" name="kendaraan">
          </div>
          <div class="">
            <label for="pengguna" class="form-label">pengguna</label>
            <input type="text" class="form-control" name="pengguna">
          </div>
          <div class="">
            <label for="tanggal mulai" class="form-label">tanggal mulai</label>
            <input type="text" class="form-control" name="tanggal_mulai">
          </div>
          <div class="">
            <label for="jam" class="form-label">jam</label>
            <input type="text" class="form-control"  name="jam">
          </div>
          <div class="">
            <label for="PIC" class="form-label">PIC</label>
            <input type="text" class="form-control" name="PIC">
          </div>
          <div class="">
            <label for="kondisi" class="form-label">kondisi</label>
            <input type="text" class="form-control"  name="kondisi">
          </div>
          <div class="">
            <label for="lokasi tujuan" class="form-label">lokasi tujuan</label>
            <input type="text" class="form-control"  name="lokasi_tujuan">
          </div>
          <div class="">
            <label for="tujuan pemakaian" class="form-label">tujuan pemakaian</label>
            <input type="text" class="form-control"  name="tujuan_pemakaian">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
     </form>

</div>

@endsection
