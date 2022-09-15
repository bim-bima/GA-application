 @extends('layouts.main')

 @section('content')
 <div class="card shadow mb-4">
     <div class="card-header py-3">
       <h6 class="m-0 font-weight-bold text-primary">Tambah Kendaraan</h6>
     </div>
     <div class="card-body">
        <form action="/master_kendaraan/store" method="post" class="col-lg-6">
            @csrf
                <label for="mk_nama_kendaraan" class="form-label">Nama Kendaraan</label>
                <input type="text" class="form-control" name="mk_nama_kendaraan">
            <button type="submit" class="btn btn-primary my-3">Tambah</button>
        </form>
       </div>
     </div>
 @endsection


