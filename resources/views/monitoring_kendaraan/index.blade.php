{{-- @extends('layouts.main') --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Genereal Affair</title>
    @include('template.head')
</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        @include('template.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                @include('template.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Blank Page</h1>
                    <center>
                        <h1 class="my-3">monitoring kendaraan</h1>
                       </center>

                       <center>
                       <table class="table table-hover table-bordered border-primary">
                           <tr>
                               <th>kendaraan</th>
                               <th>pengguna</th>
                               <th>tanggal mulai</th>
                               <th>jam</th>
                               <th>PIC</th>
                               <th>kondisi</th>
                               <th>lokasi tujuan</th>
                               <th>tujuan pemakaian</th>
                               <th>aksi</th>
                           </tr>

                           @foreach ($mk as $m )
                               <tr>
                               <td>{{ $m->kendaraan }}</td>
                               <td>{{ $m->pengguna }}</td>
                               <td>{{ $m->tanggal_mulai }}</td>
                               <td>{{ $m->jam }}</td>
                               <td>{{ $m->PIC }}</td>
                               <td>{{ $m->kondisi }}</td>
                               <td>{{ $m->lokasi_tujuan }}</td>
                               <td>{{ $m->tujuan_pemakaian }}</td>
                               <td><a class="btn btn-warning" href="/monitoring-kendaraan/{{ $m->id }}/edit">edit</a>
                                   <form action="/monitoring-kendaraan/{{ $m->id }}" method="post">
                                       @csrf
                                       @method('delete')
                                       <input class="btn btn-danger" type="submit" value="delete">
                                   </form>
                               </td>

                           </tr>
                           @endforeach
                       </table>
                       <br>
                       <a class="btn btn-primary" href="/monitoring-kendaraan/create">add new</a>

                       </center>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            @include('template.footer')
            <!-- End of Footer -->
        </div>
        <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
   @include('template.script')
</body>

</html>


@section('content')
<div class="container">
    <div class="row justify-content-center mt-3">
        <div class="col-md-10">


               </div>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>

@endsection



