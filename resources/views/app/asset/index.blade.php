@extends('layouts.main')

@section('content')

@include('sweetalert::alert')

<div class="card shadow mb-4" data-aos="fade-up" data-aos-delay="100">
  <div class="card-header py-3 px-sm-3 px-2">
    <h6 class="m-0 font-weight-bold text-primary" data-aos="fade-right" data-aos-delay="600">Daftar Asset</h6>
    @if(auth()->user()->level == "general-affair")
    <button class="btn btn-primary mt-2" data-aos="fade-right" data-aos-delay="700">
      <i class="fa fa-plus"></i>
      <a href="{{ route('app_asset.create') }}" class="text-white text-decoration-none">Tambah</a>
    </button>
    @endif      
  </div>
  <div class="card-body px-sm-3 px-2">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" data-aos="zoom-in" data-aos-delay="600">
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
          <tr>
            <input type="hidden" class="delete_id" value="{{ $asset->id }}">
            <td class="border-secondary px-2">{{ $asset->as_nama_asset }}</td>
            <td class="border-secondary px-2">{{ $asset->lokasiAsset->mla_lokasi_asset }}</td>
            <td class="border-secondary px-2">{{ $asset->as_tahun_kepemilikan }}</td>
            <td class="border-secondary px-2">{{ $asset->as_kode_asset }}</td>
            <td class="border-secondary px-2">{{ $asset->as_harga }}</td>
            <td class="border-secondary px-2">{{ $asset->categoryasset->mca_category }}</td>
            <td class="border-secondary px-2">{{ $asset->as_umur_manfaat }} tahun</td>
            <td class="border-secondary px-2">
              <a class="btn-sm btn-info btn-circle mb-xl-0 mb-1" href="{{ route('app_asset.show',$asset->id) }}"  data-toggle="tooltip" data-placement="left" title="Info">
                <i class="fas fa-eye"></i>
              </a>
              {{-- <a class="btn-sm btn-warning btn-circle mb-xl-0 mb-2" href="{{ route('app_asset.edit',$asset->id) }}"> --}}
              @if(auth()->user()->level == "general-affair")
              <a class="btn-sm btn-warning btn-circle mb-1" href="{{ route('app_asset.edit',$asset->id) }}"  data-toggle="tooltip" data-placement="left" title="Edit">
                <i class="fa fa-edit"></i>
              </a>
              <form action="{{ route('app_asset.destroy',$asset->id) }}" method="post" class="d-inline">
                @csrf
                @method('delete')
                <button class="btn btn-danger btn-circle btn-sm btndeleteasset" type="submit">
                  <i class="fas fa-trash"></i>
                </button>
              </form>

              <!-- <form action="{{ route('app_asset.destroy',$asset->id) }}" method="post" class="d-inline">
                  @csrf
                  @method('delete')
                  {{-- <input class="btn btn-danger btn-circle btndeleteasset" type="submit" value="<i class="fas fa-trash"></i>"> --}}
                  
                  <a href="" class="btn-sm btn-danger btn-circle btndeleteasset mb-xl-0 mb-2" data-toggle="tooltip" data-placement="left" title="Delete">
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

