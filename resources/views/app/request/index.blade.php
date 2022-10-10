@extends('layouts.main')
@section('content')
@include('sweetalert::alert')

<div class="card shadow mb-4">

  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Daftar Request</h6>
    <!-- <button class="btn btn-primary mt-3">
      <i class="fa fa-plus"></i>
      <a href="{{ route('app_request.create') }}" class="text-white text-decoration-none">Tambah</a>
    </button> -->
  </div>
  <div class="card-body">
    <div class="row">
      <div class="table-responsive col-md-8 border-dark">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead class="">
            <tr>
              <th class="col-sm-5 col-3 ">Request</th>
              <th class="col-sm-5 col-3 ">Catatan</th>
              <th class="col-3">Aksi</th>
            </tr>
          </thead>
          <tbody class="border-top-0">
            @foreach ($datarequest as $request)
            <tr>
              <input type="hidden" class="delete_id" value="{{ $request->id }}">
              <td>{{ $request->ar_request }}</td>
              <td>{{ $request->ar_catatan }}</td>
              <td>
                <a class="btn btn-warning btn-circle mb-sm-0 mb-2" href="{{ route('app_request.edit',$request->id) }}">
                  <i class="fa fa-edit"></i>
                </a>
                <form action="{{ route('app_request.destroy',$request->id) }}" method="post" class="d-inline">
                    @csrf
                    @method('delete')
                    {{-- <input class="btn btn-danger btndelete2" type="submit" value="Delete"> --}}
                    <a href="" class="btn btn-danger btn-circle mb-sm-0 mb-2 btndelete2">
                      <i class="fas fa-trash"></i>
                    </a>
                </form>
            </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $datarequest->links() }}
      </div>
   </div>
  </div>
</div>
@endsection

