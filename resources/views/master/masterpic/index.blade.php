@extends('layouts.main')

@section('content')

@include('sweetalert::alert')

<div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Daftar PIC</h6>
      <button class="btn btn-primary mt-3">
        <i class="fa fa-plus"></i>
        <a href="{{ route('master_pic.create') }}" class="text-white text-decoration-none">Tambah</a>
      </button>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered border" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th>Nama</th>
                <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($datapic as $pic)
            <tr>
              <input type="hidden" class="delete_id" value="{{ $pic->id }}">
              <td>{{ $pic->mp_nama }}</td>
              <td>
                <a class="btn btn-warning btn-circle" href="{{ route('master_pic.edit',$pic->id) }}">
                  <i class="fa fa-edit"></i>
                </a>
                <form action="{{ route('master_pic.destroy',$pic->id) }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    {{-- <input class="btn btn-danger btndelete2" type="submit" value="Delete"> --}}
                    <a href="" class="btn btn-danger btn-circle btndelete2">
                      <i class="fas fa-trash"></i>
                    </a>
                </form>
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>
       {{ $datapic->links() }}

      </div>
    </div>
  </div>
@endsection

