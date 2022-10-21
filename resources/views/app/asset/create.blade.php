@extends('layouts.main')

@section('content')
  <div class="card shadow mb-4" data-aos="fade-up" data-aos-delay="100">
    <div class="card-header py-3 px-sm-3 px-2">
      <h6 class="m-0 font-weight-bold text-primary" data-aos="fade-right" data-aos-delay="150">Tambah Aset</h6>
    </div>
    <div class="card-body px-sm-3 px-2">
      <form action="{{ route('app_asset.store') }}" method="POST" enctype="multipart/form-data" class="row">
        @csrf
        <div class="col-lg-6 mb-3 mb-sm-2 pr-lg-2">
          <label for="nama_asset" class="form-label" data-aos="fade-right" data-aos-delay="200">Nama Aset</label>
          <input type="text" class="form-control @error('nama_asset') is-invalid @enderror" name="nama_asset" required data-aos="fade-right" data-aos-delay="250" required autofocus value="{{ old('nama_asset') }}">
          @error('nama_asset')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="col-lg-6 mb-3 mb-sm-2 pl-lg-2">
          <label for="jumlah_asset" class="form-label" data-aos="fade-left" data-aos-delay="200">Jumlah Aset</label>
          <input type="number" min="1" class="form-control @error('jumlah_asset') is-invalid @enderror" name="jumlah_asset" required data-aos="fade-left" data-aos-delay="250" required autofocus value="{{ old('jumlah_asset') }}">
          @error('jumlah_asset')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <div class="col-lg-6 mb-3 mb-sm-2 pr-lg-2">
          <label for="lokasi_asset" class="form-label" data-aos="fade-right" data-aos-delay="250">Lokasi Aset</label>
          <select name="lokasi_asset" class="form-control @error('lokasi_asset') is-invalid @enderror" required data-aos="fade-right" data-aos-delay="300">
            <option value="">Pilih Lokasi</option>
            @foreach ($lokasiAsset as $la)
            @if( old('lokasi_asset') == $la->mla_lokasi_asset )
            <option value="{{ $la->mla_lokasi_asset }}" selected>{{ $la->mla_lokasi_asset}}</option>
            @else
            <option value="{{ $la->mla_lokasi_asset }}">{{ $la->mla_lokasi_asset}}</option>
            @endif
            @endforeach    
          </select>
          @error('lokasi_asset')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="col-lg-6 mb-3 mb-sm-2 pl-lg-2">
          <label for="category_asset" class="form-label" data-aos="fade-left" data-aos-delay="250">Kategori Aset</label>
          <select name="category_asset" class="form-control @error('category_asset') is-invalid @enderror" required data-aos="fade-left" data-aos-delay="300">
            <option value="">Pilih Kategori</option>
            @foreach ($categoryasset as $category)
            @if( old('category_asset') == $category->mca_category )
            <option value="{{ $category->mca_category }}" selected>{{ $category->mca_category}}</option>
            @else
            <option value="{{ $category->mca_category }}">{{ $category->mca_category}}</option>
            @endif
            @endforeach    
          </select>
          @error('category_asset')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="col-lg-6 mb-3 mb-sm-2 pr-lg-2">
          <label for="tahun_pembelian_asset" class="form-label" data-aos="fade-right" data-aos-delay="300">Tahun Pembelian</label>
          <input type="number" class="form-control @error('tahun_pembelian_asset') is-invalid @enderror" name="tahun_pembelian_asset" required data-aos="fade-right" data-aos-delay="350" value="{{ old('tahun_pembelian_asset') }}" required autofocus>
          @error('tahun_pembelian_asset')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="col-lg-6 mb-3 mb-sm-2 pl-lg-2">
          <label class="form-label" data-aos="fade-left" data-aos-delay="300">Bulan Pembelian</label>
          <select name="bulan_pembelian_asset" required class="custom-select custom-select-md" data-aos="fade-left" data-aos-delay="350">
            <option value="">Pilih Bulan</option>
            <option value="-01">Januari</option>
            <option value="-02">Februari</option>
            <option value="-03">Maret</option>
            <option value="-04">April</option>
            <option value="-05">Mei</option>
            <option value="-06">Juni</option>
            <option value="-07">Juli</option>
            <option value="-08">Agustus</option>
            <option value="-09">September</option>
            <option value="-10">Oktober</option>
            <option value="-11">November</option>
            <option value="-12">Desember</option>
          </select>
        </div>
        <div class="col-lg-6 mb-3 mb-sm-2 pr-lg-2">
          <label for="harga_asset" class="form-label" data-aos="fade-right" data-aos-delay="350">Harga Aset </label>
          <input type="number" min="1" class="form-control @error('harga_asset') is-invalid @enderror" name="harga_asset" required data-aos="fade-right" data-aos-delay="400" required autofocus value="{{ old('harga_asset') }}">
          @error('harga_asset')
          <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="col-lg-6 mb-3 mb-sm-2 pl-lg-2">
          <label for="umur_manfaat_asset" class="form-label" data-aos="fade-left" data-aos-delay="350">Umur Manfaat Aset</label>
          <select name="umur_manfaat_asset" required class="form-control @error('umur_manfaat_asset') is-invalid @enderror" required data-aos="fade-left" data-aos-delay="400">
            <option value="">Pilih Umur Manfaat</option>
            <option value="4">4 tahun</option>
            <option value="8">8 tahun</option>
            <option value="12">12 tahun</option>
            <option value="16">16 tahun</option>
            <option value="20">20 tahun</option>
          </select>
          @error('umur_manfaat_asset')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="col-lg-6 mt-3 mb-2">
          <button class="btn btn-info mr-1">
            <i class="fa fa-angle-left"></i>
            <a  href="{{ route('app_asset.index') }}" class="text-white text-decoration-none">Kembali</a>
          </button>
          <button type="submit" class="btn btn-success">
            <i class="fa fa-plus-circle"></i>
            Tambah
          </button>
        </div>
      </form>
    </div>
  </div>
@endsection


