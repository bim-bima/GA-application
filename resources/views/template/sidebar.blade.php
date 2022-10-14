<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark" id="accordionSidebar">
  <div data-aos="fade-right" data-aos-delay="50">
    <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
    <img class="template/img-profile" src="{{asset('template/img/icon.png') }}" width="35px">
    <div class="sidebar-brand-text">General Affair</div>
  </a>
      

    <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item ">
    <a class="nav-link" href="/home">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <hr class="sidebar-divider">

  
   
  <!-- Heading -->
  <div class="sidebar-heading">
    @if(auth()->user()->level == "pegawai")
      App
    @endif
    @if(auth()->user()->level == "general-affair")
      App
    @endif
    @if(auth()->user()->level == "management")
      GA System
    @endif
  </div>
  <li class="nav-item">
    <div class="text-white py-2 rounded">
      @if(auth()->user()->level == "general-affair")
      <a class="nav-link" href="app_perencanaan" aria-labelledby="headingTwo">
        <i class="fa fa-calendar"></i>
        <span>Perencanaan Aktivitas</span>
      </a>
      <a class="nav-link" href="app_asset">
        <i class="fa fa-cube"></i>
        <span>Asset</span>
      </a>
      <a class="nav-link nav-item active" href="app_kendaraan">
        <i class="fa fa-car"></i>
        <span>Kendaraan</span>
      </a>
      <a class="nav-link nav-item active" href="app_pengajuan">
        <i class="fa fa-share-square"></i>
        <span>Pengajuan Pengadaan</span>
      </a>
      <a class="nav-link nav-item active" href="app_request">
        <i class="fa fa-share"></i>
        <span>Request</span>
      </a>
      @endif

      @if(auth()->user()->level == "management")
      <a class="nav-link" href="app_perencanaan" aria-labelledby="headingTwo">
        <i class="fa fa-calendar"></i>
        <span>Perencanaan Aktivitas</span>
      </a>
      <a class="nav-link" href="app_asset">
        <i class="fa fa-cube"></i>
        <span>Asset</span>
      </a>
      <a class="nav-link nav-item active" href="app_kendaraan">
        <i class="fa fa-car"></i>
        <span>Kendaraan</span>
      </a>
      <a class="nav-link nav-item active" href="app_pengajuan">
        <i class="fa fa-share-square"></i>
        <span>Pengajuan</span>
      </a>
      @endif



      @if(auth()->user()->level == "pegawai")
      <a class="nav-link nav-item active" href="{{ route('app_kendaraan.create') }}">
        <i class="fa fa-car"></i>
        <span>Booking Kendaraan</span>
      </a>

      <a class="nav-link nav-item active" href="app_request">
        <i class="fa fa-share"></i>
        <span>Request</span>
      </a>
      @endif
    </div>
    <!-- Divider -->
    
 
  </li>
   <hr class="sidebar-divider">
    @if(auth()->user()->level == "general-affair")
    <!-- Heading -->
    <div class="sidebar-heading">
        Data Master
    </div>
    <li class="nav-item">
      <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseDataMaster" aria-expanded="true"
        aria-controls="collapseDataMaster">
        <i class="fas fa-fw fa-key"></i>
        <span>Data Master</span>
      </a>
      <div id="collapseDataMaster" class="collapse" aria-labelledby="headingPages"
        data-parent="#accordionSidebar" style="z-index: 100">
        <ul class="text-white bg-primary p-0 rounded">
          <a class="nav-link" href="master_pic" aria-expanded="true">
            <i class="fa fa-user"></i>
            <span>PIC</span>
          </a>
          <a class="nav-link" href="master_kendaraan" >
            <i href="master_kendaraan" class="fa fa-car"></i>
            <span>Kendaraan</span>
          </a>
          <a class="nav-link" href="master_aktivitas">
            <i class="fa fa-tasks"></i>
            <span>Aktivitas</span>
          </a>
          <a class="nav-link" href="master_vendor">
            <i class="fa fa-shopping-cart"></i>
            <span>Vendor</span>
          </a>
          <a class="nav-link" href="master_barang">
            <i class="fa fa-wrench"></i>
            <span>Barang</span>
          </a>
          <a class="nav-link" href="master_jenisbarang">
            <i class="fa fa-filter"></i>
            <span>Jenis Barang</span>
          </a>
          <a class="nav-link" href="master_statusfollowup">
            <i class="fa fa-table"></i>
            <span>Status Follow Up</span>
          </a>
          <a class="nav-link" href="master_lokasiasset">
            <i class="fa fa-map-marker"></i>
            <span>Lokasi Asset</span>
          </a>
          <a class="nav-link" href="master_jenispengajuan">
            <i class="fa fa-list-alt"></i>
            <span>Jenis Pengajuan</span>
          </a>
          <a class="nav-link" href="master_categoryasset">
            <i class="fa fa-cog"></i>
            <span>Category Asset</span>
          </a>
        </ul>
      </div>
    </li>
    <hr class="sidebar-divider d-md-block">
       <!-- Sidebar Toggler (Sidebar) -->
  @endif
    <div class="text-center">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
  </div>

  
</ul>
