
<ul class="navbar-nav sidebar sidebar-dark accordion m-0" id="accordionSidebar" style="background-color: #4e73df">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fa fa-rocket"></i>
            {{-- <i class="fas fa-laugh-wink"></i> --}}
        </div>
        <div class="sidebar-brand-text ml-2">General Affair</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item ">
      <a class="nav-link" href="/home">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span>
      </a>
    </li>

    <!-- Heading -->
    <div class="sidebar-heading">
        App
    </div>
		<li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseApp"
            aria-expanded="true" aria-controls="collapseApp">
            <i class="fa fa-desktop"></i>
            <span>APP</span>
        </a>
        <div id="collapseApp" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="text-white bg-primary py-2 collapse-inner rounded">
							<a class="nav-link" href="app_perencanaan" aria-labelledby="headingTwo">
								<i class="fa fa-calendar"></i>
								<span>Perencanaan Aktivitas</span>
							</a>
							<a class="nav-link" href="app_asset">
								<i class="fa fa-leaf"></i>
								<span>Asset</span>
							</a>
							<a class="nav-link nav-item active" href="app_kendaraan">
								<i class="fa fa-car"></i>
								<span>Kendaraan</span>
							</a>

							
            </div>
        </div>
    {{-- </li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="app_asset">
            <i class="fa fa-leaf"></i>
            <span>Asset</span></a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="app_perencanaan">
            <i class="fa fa-calendar"></i>
            <span>Perencanaan Aktivitas</span></a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="app_kendaraan">
            <i class="fa fa-car"></i>
            <span>Kendaraan</span></a>

    </li>
    <hr class="sidebar-divider my-0"> --}}




    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Data Master
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="buttons.html">Buttons</a>
                <a class="collapse-item" href="cards.html">Cards</a>
            </div>
        </div>
    </li> --}}

    <!-- Nav Item - Utilities Collapse Menu -->
    {{-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
            aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
            data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a>
            </div>
        </div>
    </li> --}}

    <!-- Divider -->
    {{-- <hr class="sidebar-divider my-0"> --}}

    <!-- Heading -->
    {{-- <div class="sidebar-heading">
        Addons
    </div> --}}

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseDataMaster" aria-expanded="true"
            aria-controls="collapseDataMaster">
            <i class="fas fa-fw fa-key"></i>
            <span>Data Master</span>
        </a>
        <div id="collapseDataMaster" class="collapse" aria-labelledby="headingPages"
          data-parent="#accordionSidebar">
          <ul class="text-white bg-primary py-2 collapse-inner rounded">
            <li class="nav-item" data-toggle="collapse">
              <a class="nav-link" href="master_pic" aria-expanded="true">
                <i class="fa fa-user"></i>
                <span>PIC</span>
              </a>
            </li>
						{{-- <a class="list-group-item list-group-item-action active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">Home</a> --}}
						<a class="nav-link" href="master_kendaraan" >
							<i href="master_kendaraan" class="fa fa-car"></i>
							<span>Kendaraan</span>
						</a>
            {{-- <a class="nav-item nav-link" id="nav-kontak-tab" data-toggle="tab">
              <span style="color: #ff0000;" href="#nav-kontak">Kontak</span>
            </a> --}}

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
          </ul>
        </div>
    </li>
    <!-- Nav Item - Pages Collapse Menu -->
    
    <!-- Nav Item - Charts -->
    {{-- <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="master_pic">
            <i class="fa fa-user"></i>
            <span>PIC</span></a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="master_kendaraan">
            <i class="fas fa-fw fa-car"></i>
            <span>Kendaraan</span></a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="master_aktivitas">
            <i class="fa fa-tasks"></i>
            <span>Aktivitas</span></a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="master_vendor">
            <i class="fa fa-shopping-cart"></i>
            <span>Vendor</span></a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="master_barang">
            <i class="fa fa-wrench"></i>
            <span>Barang</span></a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="master_jenisbarang">
            <i class="fa fa-filter"></i>
            <span>Jenis Barang</span></a>
    </li>
    <hr class="sidebar-divider my-0">
    <!-- <li class="nav-item">
        <a class="nav-link" href="master_categorybarang">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Category Barang</span></a>
    </li> -->
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="master_statusfollowup">
            <i class="fa fa-table"></i>
            <span>Status Follow Up</span></a>
    </li>
    <hr class="sidebar-divider my-0">
    <li class="nav-item">
        <a class="nav-link" href="master_lokasiasset">
            <i class="fa fa-map-marker"></i>
            <span>Lokasi Asset</span></a>
    </li>
    <hr class="sidebar-divider my-0"> --}}


    <!-- Divider -->
    <hr class="sidebar-divider d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
