@extends('layouts.main')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Asset</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th>lokasi asset</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($lokasiAsset as $item)
            <tr>
              {{-- <td>{{ $as->masset->ma_nama_asset }}</td> --}}
              <td>{{ $item->mla_lokasi_asset }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{-- {{ $asset->links() }} --}}

      </div>
    </div>
  </div>
@endsection

