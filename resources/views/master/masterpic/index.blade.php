@extends('layouts.main')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Daftar PIC</h6>
      <button class="btn btn-primary mt-3"><a href="{{ route('master_pic.create') }}" class="text-white text-decoration-none">Tambah pic</a></button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th>nama</th>
                <th>aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($datapic as $pic)
            <tr>
              {{-- <td>{{ $as->masset->ma_nama_asset }}</td> --}}
              {{-- <td class="d-none">{{ $pic->mp_id }}</td> --}}
              <td>{{ $pic->mp_nama }}</td>
              <td><a class="btn btn-warning" href="{{ route('master_pic.edit',$pic->id) }}">edit</a>
                <form action="{{ route('master_pic.destroy',$pic->id) }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    <input class="btn btn-danger" type="submit" value="delete">
                </form>
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{-- {{ $asset->links() }} --}}

      </div>
    </div>
  </div>
@endsection

