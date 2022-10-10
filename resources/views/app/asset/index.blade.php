@extends('layouts.main')

@section('content')

@include('sweetalert::alert')

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Daftar 
      </h6>
      @if(auth()->user()->level == "general-affair")
      <button class="btn btn-primary mt-3">
        <i class="fa fa-plus"></i>
        <a href="{{ route('app_asset.create') }}" class="text-white text-decoration-none">Tambah</a>
      </button>
      @endif      
    </div>
    <div class="card-body">
      <div class="table-responsive-lg">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th>Nama Asset</th>
                <th>Lokasi Asset</th>
                <th>Tahun milikan</th>
                <th>Kode Asset</th>
                <th>Harga Asset</th>
                <th>Category</th>
                <th>Umur Manfaat</th>
                <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($dataasset as $asset)
            <tr>
              <input type="hidden" class="delete_id" value="{{ $asset->id }}">
              <td>{{ $asset->as_nama_asset }}</td>
              <td>{{ $asset->lokasiAsset->mla_lokasi_asset }}</td>
              <td>{{ $asset->as_tahun_kepemilikan }}</td>
              <td>{{ $asset->as_kode_asset }}</td>
              <td>{{ $asset->as_harga }}</td>
              <td>{{ $asset->categoryasset->mca_category }}</td>
              <td>{{ $asset->as_umur_manfaat }} tahun</td>
              <td>
                <a class="btn-sm btn-info btn-circle mb-xl-0 mb-2" href="{{ route('app_asset.show',$asset->id) }}"  data-toggle="tooltip" data-placement="left" title="Info">
                  <i class="fas fa-info-circle"></i>
                </a>

                {{-- <a class="btn-sm btn-warning btn-circle mb-xl-0 mb-2" href="{{ route('app_asset.edit',$asset->id) }}"> --}}

              @if(auth()->user()->level == "general-affair")
                <a class="btn-sm btn-warning btn-circle" href="{{ route('app_asset.edit',$asset->id) }}"  data-toggle="tooltip" data-placement="left" title="Edit">
                  <i class="fa fa-edit"></i>
                </a>
                <form action="{{ route('app_asset.destroy',$asset->id) }}" method="post" class="d-inline">
                  @csrf
                  @method('delete')
                  <button class="btn btn-danger btn-circle btn-sm" type="submit">
                    <i class="fas fa-trash"></i>
                  </button>
                </form>

<!--                 <form action="{{ route('app_asset.destroy',$asset->id) }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    {{-- <input class="btn btn-danger btn-circle btndeleteasset" type="submit" value="<i class="fas fa-trash"></i>"> --}}
                    
<<<<<<< HEAD
                    <a href="" class="btn-sm btn-danger btn-circle btndeleteasset mb-xl-0 mb-2">
=======
                    <a href="" class="btn-sm btn-danger btn-circle btndeleteasset mb-xl-0 mb-2" data-toggle="tooltip" data-placement="left" title="Delete">
>>>>>>> ea7746ac8e5b058125c3db7ada37706a641658ce
                      <i class="fas fa-trash"></i>
                    </a>
                </form> -->
            @endif
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>
       {{ $dataasset->links() }}

      </div>
    </div>
  </div>
@endsection

