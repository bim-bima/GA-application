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

    <style>
      .hover-end{
        padding: 0;
        margin: 0;
        font-size: 10px;
        text-align: center;
        position: absolute;
        bottom: 0;
        width: 100%;
        opacity: .8;
      }
    </style>
</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">

<!-- Modal -->
<div class="modal fade centered" id="aktivitasmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-primary" id="exampleModalLabel">Aktivitas</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="title" class="form-label">Nama Aktivitas</label>
          <input type="text" class="form-control" id="title" required>
        </div>
<!-- <div class="mb-1">
          <input type="checkbox" class="form-check-input" id="reminder">
          <label for="reminder" class="form-checkbox-label">reminder</label>
        </div> -->
        <div class="form-check mb-1 ml-2">
          <input class="form-check-input" type="checkbox" value="reminder" id="reminder" >
          <label class="form-check-label" for="reminder">
            Reminder
          </label>
        </div>
                <label class="form-label mt-3">ulangi</label>
              <select name="ulangi" id="ulangi" class="custom-select custom-select-md mb-3">
                <option value="allday" class="text-primary">Setiap Hari</option>
                <option value="weekly" class="text-success">Seminngu 1x</option>
              </select>
        <div class="mb-1">
          <label for="todate" class="form-label">todate</label>
          <input type="date" class="form-control" id="todate">
        </div>
        <label class="form-label mt-3">Prioritas</label>
              <select name="prioritas" id="prioritas" class="custom-select custom-select-md mb-3">
                <option value="rendah" class="text-primary">Rendah</option>
                <option value="sedang" class="text-success">Sedang</option>
                <option value="utama" class="text-danger">Tinggi</option>
              </select>
        <div class="mb-1">
          <label for="deskripsi" class="form-label">Deskripsi</label>
          <input type="text" class="form-control" id="deskripsi">
        </div>
        <div class="mb-1">
          <label for="penanganan" class="form-label">Penanganan</label>
          <input type="text" onfocus="this.value=''" class="form-control" id="penanganan">
        </div>
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
                      <!-- <div id='caljump'>
                          <label for='months'>Pergi ke</label>
                          <select id='months'></select>
                      </div> -->
                      <div id='calendar'></div>
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
            // left:'prev,next today',
            left:'month',
            center:'title',
            right:'agendaWeek,agendaDay'
            },
            defaultDate: moment('{{ $perencanaan->ap_tahun.$perencanaan->ap_bulan }}'),
            events:aktivitas,
            selectable:true,
            selectHelper:true,
            select: function (start, end, allDays)
            {
                $('#aktivitasmodal').modal('toggle');

                $('#saveBtn').click(function(){
                    var title = $('#title').val();
                    var reminder = $('#reminder').val();
                    var ulangi = $('#ulangi').val();
                    var todate = $('#todate').val();
                    var start_date = moment(start).format('YYYY-MM-DD');
                    var end_date = moment(end).format('YYYY-MM-DD');
                    var deskripsi = $('#deskripsi').val();
                    var penanganan = $('#penanganan').val();
                    var prioritas = $('#prioritas').val();



                $.ajax({
                    url: "{{ route('app_aktivitas.store') }}",
                    type: "POST",
                    dataType: 'json',
                    data: { title, reminder, ulangi, todate,  start_date, end_date, deskripsi, penanganan,prioritas},
                    success:function(response)
                    {
                      $('.fc-event').css('color','white');
                      $('.fc-event').css('font-size','15px');
                      $('.fc-event').css('padding','2px');
                      $('#aktivitasmodal').modal('hide')
                      $('#calendar').fullCalendar('refetchEvents');
                      $('#calendar').fullCalendar('renderEvent',{
                        'title'      : response.title,
                        'reminder'   : response.reminder,
                        'ulangi'     : response.ulangi,
                        'todate'     : response.todate,
                        'start'      : response.start,
                        'end'        : response.end,
                        'deskripsi'  : response.deskripsi,
                        'penanganan' : response.penanganan,
                        'prioritas'  : response.prioritas,
                        'color'      : response.color,
                      });
                    },
                    error:function(error)
                    {
                      if(error.responseJSON.errors){
                        $('#titleError').html(error.responseJSON.errors.title)
                      }
                    },
                  });
                });
            },
            editable:true,
            eventDrop:function(event) {
                var id = event.id;
                var start_date = moment(event.start).format('YYYY-MM-DD');
                var end_date = moment(event.end).format('YYYY-MM-DD');

                $.ajax({
                    url: "{{ route('app_aktivitas.update', '') }}" +'/'+ id,
                    type: "PATCH",
                    dataType: 'json',
                    data: {start_date, end_date },
                    success:function(response)
                    {
                      console.log(response)
                      $('.fc-event').css('color','white');
                      $('.fc-event').css('font-size','15px');
                      $('.fc-event').css('padding','2px');

                    },
                    error:function(error)
                    {
                      console.log(error)
                    },
                  });
            },
            eventClick: function(event){
              var id = event.id; 

              if(confirm('yakin ingin menghapus ini ')){
                    $.ajax({
                    url: "{{ route('app_aktivitas.destroy', '') }}" +'/'+ id,
                    type: "DELETE",
                    dataType: 'json',
                    success:function(response)
                    {
                      $('#calendar').fullCalendar('removeEvents' ,response);
                      $('.fc-event').css('color','white');
                      $('.fc-event').css('font-size','15px');
                      $('.fc-event').css('padding','2px');
                    },
                    error:function(error)
                    {
                      console.log(error)
                    },
                  });    
              }         
            },
            // eventMouseover: function(event, jsEvent, view) {
            //   $('.fc-event-inner'. this).append('<div id=\"'+event.id+'\" class=\"hover-end\">'+$.fullCalendar.formatDate(event.end,'h:mmt')+'</div>');
            // },
            // eventMouseout: function(event, jsEvent, view){
            //   $('#'+event.id).remove();
            // },              
            // selectAllow: function(event){
            //   return moment(event.start).utcOffset(false).isSame(moment(event.end).subtract(1, 'second').utcOffset(false),'day');
            // }  
            
    });
        $("#aktivitasmodal").on("hidden.bs.modal", function() {
          $('#title').val('');
          // $('#reminder').val('');
          // $('#repeat').val('');
          $('#frekuensi').val('allday');
          $('#todate').val('-');
          $('#prioritas').val('rendah');
          $('#deskripsi').val('');
          $('#penanganan').val('');
           $('.fc-event').css('color','white');
           $('.fc-event').css('font-size','15px');
           $('.fc-event').css('padding','2px');
          $('#saveBtn').unbind();
          $('#saveBtn').refresh();
        });

        $('.fc-event').css('font-size','15px');
        $('.fc-event').css('padding','2px');
        $('.fc-view-container').css('background-color','rgb(176,196,222,0.1)');
        $('.fc-center h2').css('color','blue');
        // $('.fc-month-button').css('background-color','blue');
        $('.fc-month-button').css('color','blue');
        // $('.fc-agendaDay-button').css('background-color','blue');
        $('.fc-agendaDay-button').css('color','blue');
        // $('.fc-agendaWeek-button').css('background-color','blue');
        $('.fc-agendaWeek-button').css('color','blue');
          $('.fc-event').css('color','white');


//     $(document).ready(function() {
//     var $months = $('#months');
//     var $calendar = $('#calendar');

//     $calendar.fullCalendar({
//         viewRender: function() {
//             buildMonthList();
//         }
//     });

//     $('#months').on('change', function() {
//         $calendar.fullCalendar('gotoDate', $(this).val());
//     });

//     buildMonthList(); // set initial jump list on load

//     function buildMonthList() {
//         $('#months').empty(); // clear jump list
//         var month = $calendar.fullCalendar('getDate');
//         var initial = month.format('YYYY-MM'); // where are we?
//         month.add(-6, 'month'); // 6 months past
//         for (var i = 0; i < 13; i++) { // 6 months future
//             var opt = document.createElement('option');
//             opt.value = month.format('YYYY-MM-01');
//             opt.text = month.format('MMM YYYY');
//             opt.selected = initial === month.format('YYYY-MM'); // current selection
//             $months.append(opt);
//             month.add(1, 'month');
//         }
//     }
// });


  });
    </script>
    </body>
    
   @include('template.script')  
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

