 @extends('layouts.main')
 @section('content')
<div class="card shadow mb-4" data-aos="fade-up" data-aos-delay="100">
  <div class="card-header py-3 px-sm-3 px-2">
    <h6 class="m-0 font-weight-bold text-primary" data-aos="fade-right" data-aos-delay="500">Edit Asset</h6>
  </div>
  <div class="card-body px-sm-3 px-2">
    <form action="{{ route('app_asset.update',$asset->id) }}" method="POST" enctype="multipart/form-data" class="row">
      @csrf
      @method('put')
      <div class="col-lg-6 mb-3 mb-sm-2">
        <label for="nama_asset" class="form-label" data-aos="fade-right" data-aos-delay="550">Nama Asset</label>
        <input type="text" class="form-control @error('nama_asset') is-invalid @enderror" name="nama_asset" value="{{ $asset->as_nama_asset }}" required data-aos="fade-right" data-aos-delay="600">
        @error('nama_asset')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-lg-6 mb-3 mb-sm-2">
        <label for="category_asset" class="form-label" data-aos="fade-left" data-aos-delay="650">Category Asset</label>
        <select name="category_asset" class="form-control @error('category_asset') is-invalid @enderror" required data-aos="fade-left" data-aos-delay="700">
          @foreach ($categoryAsset as $category)
          <option value="{{ $category->id }}" 
          {{ $category->id == $asset->as_mca_id ? 'selected="selected"' : '' }}>
          {{ $category->mca_category}}</option>
          @endforeach    
        </select>
        @error('category_asset')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-lg-6 mb-3 mb-sm-2">
        <label for="lokasi_asset" class="form-label" data-aos="fade-right" data-aos-delay="650">Lokasi Asset</label>
        <select name="lokasi_asset" class="form-control @error('lokasi_asset') is-invalid @enderror" required data-aos="fade-right" data-aos-delay="700">
          @foreach ($lokasiAsset as $la)
          <option value="{{ $la->id }}" 
          {{ $la->id == $asset->as_mla_id ? 'selected="selected"' : '' }}>
          {{ $la->mla_lokasi_asset}}</option>
          @endforeach    
        </select>
        @error('lokasi_asset')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-lg-6 mb-3 mb-sm-2">
        <label for="as_kode_asset" class="form-label" data-aos="fade-left" data-aos-delay="650">Kode Asset</label>
        <input type="text" class="form-control @error('kode') is-invalid @enderror" name="as_kode_asset" value="{{ $asset->as_kode_asset }}" required readonly data-aos="fade-left" data-aos-delay="700">
        @error('kode')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-lg-6 mb-3 mb-sm-2">
        <label for="tahun_pembelian_asset" class="form-label" data-aos="fade-right" data-aos-delay="750">Tahun Pembelian</label>
        <input type="number" min="1900" class="form-control @error('tahun_pembelian_asset') is-invalid @enderror" name="tahun_pembelian_asset" value="{{ $asset->as_tahun_kepemilikan }}" required data-aos="fade-right" data-aos-delay="800">
        @error('tahun_pembelian_asset')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-lg-6 mb-3 mb-sm-2">
        <label class="form-label" data-aos="fade-left" data-aos-delay="750">Bulan Pembelian</label>
        <select name="bulan_pembelian_asset" class="custom-select custom-select-md" data-aos="fade-left" data-aos-delay="800">
          <option value="{{ $asset->as_bulan }}">Pilih Bulan</option>
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
      <div class="col-lg-6 mb-3 mb-sm-2">
        <label for="harga_asset" class="form-label" data-aos="fade-right" data-aos-delay="850">Harga Asset</label>
        <input type="number" min="1" class="form-control @error('harga_asset') is-invalid @enderror" name="harga_asset" value="{{ $asset->as_harga }}" required data-aos="fade-right" data-aos-delay="900">
        @error('harga_asset')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <!-- <div class="col-lg-6 mb-3 mb-sm-2">
        <label for="as_umur_manfaat" class="form-label">Umur Manfaat Asset</label>
        <input type="text" class="form-control @error('umur') is-invalid @enderror" name="as_umur_manfaat" value="{{ $asset->as_umur_manfaat }}" required>
        @error('umur')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div> -->
      <div class="col-lg-6 mb-3 mb-sm-2">
        <label for="umur_manfaat_asset" class="form-label" data-aos="fade-left" data-aos-delay="850">Umur Manfaat Asset</label>
        <select name="umur_manfaat_asset" class="form-control @error('umur_manfaat_asset') is-invalid @enderror" required data-aos="fade-left" data-aos-delay="900">
          <option value="{{ $asset->umur_manfaat_asset }}">{{ $asset->as_umur_manfaat }} tahun</option>
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
      <div class="col-lg-6">
        <button class="btn btn-info mr-1 mt-3 mb-1">
          <i class="fa fa-angle-left"></i>
          <a href="{{ route('app_asset.index') }}" class="text-white text-decoration-none">Kembali</a>
        </button>
        <button type="submit" class="btn btn-success mt-3 mb-1">
          <i class="fa fa-edit"></i>
          Edit
        </button>
      </div>
    </form>
  </div>
</div>
@endsection

               <!--  <label for="as_mla_id" class="form-label">Lokasi Asset</label>
               <input type="text" class="form-control @error('lokasi') is-invalid @enderror" name="as_mla_id" value="{{ $asset->as_mla_id }}" required>
                @error('lokasi')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror -->

                

              
                

    

