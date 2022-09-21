
<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>General Affair</title>
    @include('template.head')
</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

<!-- Modal -->
<div class="modal fade" id="aktivitasmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Aktivitas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="input" id="title" class="form-control">
        <span id="titleError" class="text-danger"></span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
        <button type="button" id="saveBtn" class="btn btn-primary">Tambah Aktivitas</button>
      </div>
    </div>
  </div>
</div>

        <!-- Sidebar -->
        @include('template.sidebar')
        <!-- End of Sidebar -->

        {{-- sweet alert --}}
        @include('sweetalert::alert')


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                @include('template.topbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">Aktivitas</h6>
                    </div>
                    <div class="card-body">
                    <div id="calendar"> 
                      
                    </div>
                </div>
              </div>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

    <script>
    $(document).ready(function() {
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
        var aktivitas = @json($events);
        $('#calendar').fullCalendar({
            header:{
            left:'prev,next today',
            center:'title',
            right:'month,agendaWeek,agendaDay'
            },
            events:aktivitas,
            selectable:true,
            selectHelper:true,
            select: function (start, end, allDays)
            {
                $('#aktivitasmodal').modal('toggle');

                $('#saveBtn').click(function(){
                    var title = $('#title').val();
                    var start_date = moment(start).format('YYYY-MM-DD');
                    var end_date = moment(end).format('YYYY-MM-DD');
                $.ajax({
                    url: "{{ route('app_aktivitas.store') }}",
                    type: "POST",
                    dataType: 'json',
                    data: { title, start_date, end_date },
                    success:function(response)
                    {
                      $('#aktivitasmodal').modal('hide')
                      // $('#calendar').fullCalendar('renderEvent');
                      // alert("Added Successfully");
                      // $('#calendar').fullCalendar('renderEvent',{
                      //   'title' : response.title,
                      //   'start' : response.start_date,
                      //   'end'   : response.end_date
                      // });
                    },
                    error:function(error)
                    {
                      if(error.responseJSON.errors){
                        $('#titleError').html(error.responseJSON.errors.title)
                      }
                    },
                  })
                });
            },
            
    })
  });
    </script>
   @include('template.script')  
    </body>
</html>


<!-- <html lang="en">
<head>
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
    @include('template.head')


  <title>General Affair </title>
</head>
<body>
  <div class="col-lg-8">
  <div id="calendar">
  </div>
    
  </div>
</body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
          });
        var aktivitas = @json($events);
        $('#calendar').fullCalendar({
          header:{
          'left':'prev,next today',
          'center':'title',
          'right':'month,agendaWeek,agendaDay' 
          },
          events: aktivitas,
          selectable:true,
          selectHelper:true,
          select: function (start, end, allDays)
            {
                $('#aktivitasmodal').modal('toggle');

                $('#saveBtn').click(function(){
                    var title = $('#title').val();
                    var start_date = moment(start).format('YYYY-MM-DD');
                    var end_date = moment(end).format('YYYY-MM-DD');

                $.ajax({
                    url: "{{ route('app_aktivitas.store') }}",
                    type: "POST",
                    dataType: 'json',
                    data: {title,start_date,end_date},
                    success:function(response)
                    {
                      $('#aktivitasmodal').modal('hide')
                      // $('#calendar').fullCalendar('renderEvent');
                      // alert("Added Successfully");
                      // $('#calendar').fullCalendar('renderEvents',{
                      //   'title' : response.title,
                      //   'start' : response.start_date,
                      //   'end'   : response.end_date
                      // });
                    },
                    error:function(error)
                    {
                      if(error.responseJSON.errors){
                        $('#titleError').html(error.responseJSON.errors.title);
                      }
                    },
                });
            }); 
            },
            editable: true,

    })
  });


  </script>
</html> 