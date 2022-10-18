<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow px-1">
  <!-- Sidebar Toggle (Topbar) -->
  <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle">
    <i class="fa fa-bars"></i>
  </button>
  <!-- Topbar Navbar -->
  <ul class="navbar-nav ml-auto">
    <!-- Nav Item - Alerts -->
      <?php 
      use App\Models\Pengajuan;
      use App\Models\AppRequest;
      
      $pesan = AppRequest::all();
      $jumlahpesan = AppRequest::count();
      
      $pengajuan = Pengajuan::where('ap_status', 'menunggu persetujuan')->get();
      $jumlah = Pengajuan::where('ap_status', 'menunggu persetujuan')->count();
     ?>
    @if(auth()->user()->level == "management")
          <li class="nav-item dropdown no-arrow mx-1">
      <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-bell fa-fw"></i>
          <!-- Counter - Alerts -->
            @if($jumlah > 0)
              <span class="badge badge-danger badge-counter">{{ $jumlah }}</span>
            @endif
      </a>
      <!-- Dropdown - Alerts -->
      <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
          aria-labelledby="alertsDropdown">
          <h6 class="dropdown-header">
              Pemberitahuan Pengajuan
          </h6>
              @foreach( $pengajuan as $list)
              <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                      <div class="icon-circle bg-success">
                          <i class="fas fa-donate text-white"></i>
                      </div>
                  </div>
                  <div>
                  <?php  
                  $tanggal1 = $list->created_at;
                  $tanggal = substr($tanggal1,-0,10);
                  ?>
                    <div class="small text-red-500">{{ $tanggal }}</div>
                      {{ $list->ap_nama_pengajuan }}
                  </div>
              </a>
              @endforeach
                @if($jumlah == 0)
                <a class="dropdown-item text-center small text-grey-500 bg-white" href="#"><i>Tidak Ada Pengajuan</i></a>
                @endif

                @if($jumlah > 0)
                <a class="dropdown-item text-center small text-grey-500 bg-white" href="#"><i>Total Pengajuan : {{ $jumlah }} </i></a>
                @endif
          
      </div>
    </li>
    @endif

    @if(auth()->user()->level == "general-affair")
    <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                @if($jumlahpesan > 0)
                <span class="badge badge-danger badge-counter">{{ $jumlahpesan }}</span>
                @endif
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                 Pesan Request
                </h6>
                @foreach( $pesan as $item)
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-success">
                            <i class="fas fa-donate text-white"></i>
                        </div>
                    </div>
                    <div>
                    <?php  
                    $tanggal1 = $item->created_at;
                    $tanggal = substr($tanggal1,-0,10);
                    ?>
                      <div class="small text-red-500">{{ $tanggal }}</div>
                        {{ $item->ar_request }}
                    </div>
                </a>
                @endforeach

                @if($jumlahpesan == 0)
                <a class="dropdown-item text-center small text-gray-500" href="#"><i>Tidak Ada Pesan</i></a>
                @endif

                @if($jumlahpesan > 0)
                <a class="dropdown-item text-center small text-gray-500" href="#"><i>Total Pesan : {{ $jumlahpesan }} </i></a>
                @endif

              </div>
            </li>
    @endif
    <!-- Nav Item - User Information -->
    <li class="nav-item dropdown no-arrow" >
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <span class="mr-3 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
        <img class="template/img-profile rounded-circle" src="{{asset('template/img/undraw_profile.svg') }}" width="50px">
      </a>
        <!-- Dropdown - User Information -->
      <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown" style="z-index: 100">

       <!--  <a class="dropdown-item" href="{{ route('logout') }}">
        <i class="fas fa-profile fa-sm fa-fw mr-2 text-gray-400"></i>
        {{ __('Profile') }}
        </a> -->

        <a class="dropdown-item" href="{{ route('edit_password') }}">
        <i class="fas fa-edit fa-sm fa-fw mr-2 text-gray-400"></i>
        {{ __('Ubah Password') }}
        </a>

        <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="modal" 
        data-target="#logoutModal">
        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
        {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
          @csrf
        </form>
      </div>
    </li>
  </ul>
</nav>

{{-- onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" --}}
<!-- onclick="event.preventDefault();
                document.getElementById('logout-form').submit();"  -->