@extends('layouts.main')
@section('content')
@include('sweetalert::alert')

<div class="card shadow mb-4" data-aos="fade-up" data-aos-delay="50">
  <div class="card-header py-3 px-sm-3 px-2">
    <h6 class="m-0 font-weight-bold text-primary" data-aos="fade-right" data-aos-delay="100">Daftar Asset</h6>
    @if(auth()->user()->level == "general-affair")
    <button class="btn btn-primary mt-2" data-aos="fade-right" data-aos-delay="150">
      <i class="fa fa-plus"></i>
      <a href="{{ route('app_asset.create') }}" class="text-white text-decoration-none">Tambah</a>
    </button>
    @endif      
  </div>
  <div class="card-body px-sm-3 px-2">
    
    @if($cek == 0)
    <div class="col-12 px-0">
      <div class="card mb-3 border-danger">
        <div class="card-body">
          <div class="row">
            <div class="col-12 px-1">
              <div class="text-center">
                <i class="fas fa-info-circle"></i>
                <i>Belum Ada Data Asset Disini</i>
              </div>
            </div>                      
          </div>
        </div>
      </div>
    </div>
    @endif

    @if($cek > 0)
    <div class="table-responsive">
      <table class="table table-bordered" id="table" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th class="border border-secondary px-2">Nama Asset</th>
            <th class="border border-secondary px-2">Lokasi Asset</th>
            <th class="border border-secondary px-2">Tahun milikan</th>
            <th class="border border-secondary px-2">Kode Asset</th>
            <th class="border border-secondary px-2">Harga Asset</th>
            <th class="border border-secondary px-2">Category</th>
            <th class="border border-secondary px-2">Umur Manfaat</th>
            <th class="border border-secondary px-2">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($dataasset as $asset)
          <?php 
            $harga1 = $asset->as_harga;
            $harga = number_format($harga1,0,",",",");
           ?>
          <tr>
            <input type="hidden" class="delete_id" value="{{ $asset->id }}">
            <td class="border-secondary px-2">{{ $asset->as_nama_asset }}</td>
            <td class="border-secondary px-2">{{ $asset->as_mla_id }}</td>
            <td class="border-secondary px-2">{{ $asset->as_tahun_kepemilikan }}</td>
            <td class="border-secondary px-2">{{ $asset->as_kode_asset }}</td>
            <td class="border-secondary px-2">{{ $harga }}</td>
            <td class="border-secondary px-2">{{ $asset->as_mca_id }}</td>
            <td class="border-secondary px-2">{{ $asset->as_umur_manfaat }} tahun</td>
            <td class="border-secondary px-2">
              <a class="btn-sm btn-info btn-circle mb-xl-0 mb-1" href="{{ route('app_asset.show',$asset->id) }}"  data-toggle="tooltip" data-placement="left" title="Info">
                <i class="fas fa-eye"></i>
              </a>
              @if(auth()->user()->level == "general-affair")
              <a class="btn-sm btn-warning btn-circle mb-1" href="{{ route('app_asset.edit',$asset->id) }}"  data-toggle="tooltip" data-placement="left" title="Edit">
                <i class="fa fa-edit"></i>
              </a>
              <form action="{{ route('app_asset.destroy',$asset->id) }}" method="post" class="d-inline">
                @csrf
                @method('delete')
                <button class="btn-danger btn-circle btn-sm border-0 btndeleteasset" type="submit"><i class="fas fa-trash"></i>
                </button>
              </form>
              @endif
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $dataasset->links() }}
    </div>
    @endif
  </div>
</div>
@endsection

