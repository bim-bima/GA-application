@extends('layouts.main')

@section('content')
<div class="container">
     <h1>Add New Asset </h1>

     <form action="/asset/store" method="post" class="col-lg-6">
        @csrf
          <div class="">
            <label for="nama_barang" class="form-label">nama barang</label>
            <input type="text" class="form-control" name="nama_barang">
          </div>
          <div class="">
            <label for="lokasi_asset" class="form-label">lokasi asset</label>
            <input type="text" class="form-control" name="lokasi_asset">
          </div>
          <div class="">
            <label for="kode_barang" class="form-label">kode barang</label>
            <input type="text" class="form-control" name="kode_barang">
          </div>
          <div class="">
            <label for="harga_barang" class="form-label">harga barang</label>
            <input type="text" class="form-control"  name="harga_barang">
          </div>
          <div class="">
            <label for="nilai_residu" class="form-label">nilai residu</label>
            <input type="text" class="form-control" name="nilai_residu">
          </div>
          <div class="">
            <label for="umur_manfaat_asset" class="form-label">umur manfaat asset</label>
            <input type="text" class="form-control"  name="umur_manfaat_asset">
          </div>

          <button type="submit" class="btn btn-primary">Submit</button>
     </form>

</div>

@endsection
