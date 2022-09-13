@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-3">
        <div class="col-md-10">

                <center>
                    <h1 class="my-3">Asset</h1>
                   </center>

                   <center>
                   <table class="table table-hover table-bordered border-primary">
                       <tr>
                           <th>nama barang</th>
                           <th>lokasi asset</th>
                           <th>kode barang</th>
                           <th>harga barang</th>
                           <th>nilai residu</th>
                           <th>umur manfaat asset </th>
                           <th>aksi</th>
                       </tr>

                       @foreach ($asset as $s )
                           <tr>
                           <td>{{ $s->nama_barang }}</td>
                           <td>{{ $s->lokasi_asset }}</td>
                           <td>{{ $s->kode_barang }}</td>
                           <td>{{ $s->harga_barang }}</td>
                           <td>{{ $s->nilai_residu }}</td>
                           <td>{{ $s->umur_manfaat_asset }}</td>
                           <td><a class="btn btn-warning" href="/asset/{{ $s->id }}/edit">edit</a>
                               <form action="/asset/{{ $s->id }}" method="post">
                                   @csrf
                                   @method('delete')
                                   <input class="btn btn-danger" type="submit" value="delete">
                               </form>
                           </td>

                       </tr>
                       @endforeach
                   </table>
                   <br>
                   <a class="btn btn-primary" href="/asset/create">add new</a>

                   </center>
               </div>
            </div>
        </div>
    </div>
</div>

@endsection



