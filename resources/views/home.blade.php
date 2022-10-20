@extends('layouts.main')
@section('content')
<div class="card shadow mb-4" data-aos="fade-up" data-aos-delay="50">
  @if(auth()->user()->level == "management")
  <div class="card-header py-3 px-sm-3 px-2">
    <h6 class="m-0 font-weight-bold text-primary">Dashboard</h6>
  </div>
  <div class="card-body px-sm-4">
    <div class="row px-sm-1">
      <div class="col-xl-6 px-0 mb-4">
        <h6 class="font-weight-bold text-primary mb-3">Riwayat Pengajuan</h6>
        <div class="table-responsive">
          @if($cekpengajuan == 0)
          <div class="col px-0">
            <div class="card mb-3 border-danger">
              <div class="card-body">
                <div class="row">
                  <div class="col-12 px-1">
                    <div class="text-center">
                      <i class="fas fa-info-circle"></i>
                      <i>Belum Ada Data Disini</i>
                    </div>
                  </div>                      
                </div>
              </div>
            </div>
          </div>
          @endif
      
          @if($cekpengajuan > 0)
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th class="border px-2 border-secondary col-lg-1 col-1 fs-6">Tanggal</th>
                  <th class="border px-2 border-secondary col-lg-2 col-2 fs-6">Nama Pengajuan</th>
                  <th class="border px-2 border-secondary col-lg-2 col-2 fs-6">Status</th>
                  <th class="border px-2 border-secondary col-lg-1 col-1 fs-6">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($datapengajuan as $pengajuan)
                <tr>
                  <?php 
                    $tanggal1 = $pengajuan->created_at;
                    $tanggal = substr($tanggal1,-0,10);
                  ?>
                  <input type="hidden" class="delete_id" value="{{ $pengajuan->id }}">
                  <td class="px-2 border-secondary"><small>{{ $tanggal }}</small></td>
                  <td class="px-2 border-secondary"><small>{{ $pengajuan->ap_nama_pengajuan }}</small></td>
                  <td class="px-2 border-secondary"><small>{{ $pengajuan->ap_status }}</small></td>
                  <td class="px-2 border-secondary">
                    <a class="btn-sm btn-info btn-circle mb-2" href="{{ route('app_pengajuan.show',$pengajuan->id) }}"  data-toggle="tooltip" data-placement="left" title="Info">
                      <i class="fas fa-eye"></i>
                    </a>
                    <form action="{{ route('app_pengajuan.destroy',$pengajuan->id) }}" method="post" class="d-inline">
                      @csrf
                      @method('delete')
                      <button class="btn btn-danger btn-circle btn-sm btndeletepengajuan" type="submit">
                        <i class="fas fa-trash"></i>
                      </button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          @endif
         {{ $datapengajuan->links() }}
        </div>
      </div>
      <div class="col-xl-6 px-0 pl-xl-3">
        <div class="card mb-4">
          <!-- Card Header - Accordion -->
          <a href="#Aktivitas" class="d-block card-header py-3 px-sm-3 px-2" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="Aktivitas">
            <h6 class="m-0 font-weight-bold text-primary">Aktivitas GA Hari Ini</h6>
          </a>
          <!-- Card Content - Collapse -->
          <div class="collapse show" id="Aktivitas">
            <div class="card-body px-sm-3 px-2">
              <table class="table table-bordered border" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th class="border border-secondary px-2 col-lg-5">Aktivitas</th>
                    <th class="border border-secondary px-2 col-lg-2 col-3">Prioritas</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($aktivitas as $today)
                  <tr>
                    <td class="border-secondary px-2">{{ $today->title }}</td>
                    <td class="border-secondary px-2">{{ $today->prioritas }}</td>
                  </tr>
                  @endforeach
                  @if($cekak == 0)
                  <tr class="text-center">
                    <td colspan="2" class="border-secondary px-2">
                      <i class="fas fa-info-circle"></i>
                      <i>Tidak Ada Aktifitas Untuk Hari Ini</i>
                    </td>
                  </tr>
                  @endif
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endif

  @if(auth()->user()->level == "general-affair")
  <div class="card-header py-3 px-sm-3 px-2">
    <h6 class="m-0 font-weight-bold text-primary">Dashboard</h6>
  </div>
  <div class="card-body px-sm-4">
    <div class="row px-sm-1">
      <div class="col-lg-6 px-0">
        <h6 class="font-weight-bold text-primary">Aktivitas Hari Ini</h6>
        <div class="col-12 px-0" style="overflow-y: auto; max-height: 285px;">
          <table class="table table-bordered border" id="dataTable" width="100%" cellspacing="0">
            <thead>
              <tr>
                <th class="border border-secondary px-2 col-lg-6">Aktivitas</th>
                <th class="border border-secondary px-2 col-2">Prioritas</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($aktivitas as $today)
              <tr>
                <td class="border-secondary px-2">{{ $today->title }}</td>
                <td class="border-secondary px-2">{{ $today->prioritas }}</td>
              </tr>
              @endforeach
            
              @if($cekak == 0)
              <tr class="text-center">
                <td colspan="2" class="border-secondary px-2">
                  <i class="fas fa-info-circle"></i>
                  <i>Tidak Ada Aktifitas Untuk Hari Ini</i>
                </td>
              </tr>
              @endif
            </tbody>
          </table>
        </div>
      </div>
      <div class="card-body col-lg-6 px-0 pl-lg-3 mt-lg-2">
        <div class="card">
            <a href="#DaftarRequest" class="d-block card-header m-0 px-sm-3 px-2" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="DaftarRequest">
              <h6 class="m-0 font-weight-bold text-primary">Daftar Request</h6>
            </a>
          <div class="collapse show" id="DaftarRequest">
            <div class="card-body px-sm-3 px-2">
              <div class="row">
                @if($cekrequest == 0)
                  <div class="col">
                    <div class="card border-danger mb-2">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-12">
                            <div class="text-center">
                              <i class="fas fa-info-circle"></i>
                              <i>Tidak Ada request</i>
                            </div>
                          </div>                      
                        </div>
                      </div>
                    </div>
                  </div>
                @endif

                @if($cekrequest > 0)
                <div class="col-12" style="overflow-y: auto; max-height: 285px;">
                  <table class="table table-bordered border" id="dataTable" cellspacing="0">
                    <thead>
                      <tr>
                        <th class="col-6 border border-secondary px-2">Request</th>
                        <th class="col-5 border border-secondary px-2">Tanggal Estimasi</th>
                        <th class="col-1 border border-secondary px-2">Detail</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($listrequest as $list)
                      <?php 
                        $tanggal = substr($list->ar_tanggal_estimasi,-0,10);
                        ?>
                      <tr>
                        <td class="border-secondary px-2">{{ $list->ar_request }}</td>
                        <td class="border-secondary px-2">{{ $tanggal }}</td>
                        <td class="border-secondary px-2 text-center"> 
                          <a class="btn-sm btn-info btn-circle" href="{{ route('app_request.show',$list->id) }}"  data-toggle="tooltip" data-placement="left" title="Info">
                          <i class="fas fa-info-circle"></i>
                          </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                @endif
              </div>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </div>
  @endif

</div>
  @if(auth()->user()->level == "pegawai")
  <div class="card col-12 px-0">
    <div class="card-header py-3 px-sm-3 px-2">
      <h6 class="m-0 font-weight-bold text-primary" data-aos="fade-right" data-aos-delay="100">Buat Request</h6>
    </div>
    <div class="card-body px-sm-3 px-2">
      <div class="row">
        <div class="col-lg-6 border-dark">
          <form action="{{ route('app_request.store') }}" method="POST" enctype="multipart/form-data" class="">
            @csrf
            <label for="ar_request" class="form-label" data-aos="fade-right" data-aos-delay="150">Request</label>
            <input type="text" class="mb-2 form-control @error('request') is-invalid @enderror" name="ar_request" 
            required data-aos="fade-right" data-aos-delay="200" value="{{ old('ar_request') }}">
            @error('request')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror

            <div class="mb-3 mb-sm-2">
              <label for="ar_kebutuhan" class="form-label" data-aos="fade-right" data-aos-delay="200">Tingkat Kebutuhan</label>
              <select name="ar_kebutuhan" required class="form-control @error('ar_kebutuhan') is-invalid @enderror" required data-aos="fade-right" data-aos-delay="250">
                <option value="">Pilih Tingkat Kebutuhan</option>
                <option value="rendah">Rendah</option>
                <option value="sedang">Sedang</option>
                <option value="tinggi">Tinggi</option>
              </select>
              @error('ar_kebutuhan')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
              <input type="hidden" class="mb-2 form-control" name="ar_perequest" value="{{ auth()->user()->name }}" >
            </div>
            <div class="mb-3 mb-sm-2">
            <label for="tanggal_estimasi" class="form-label" data-aos="fade-right" data-aos-delay="250">Tanggal Estimasi</label>
            <input type="date" class="mb-2 form-control @error('tanggal_estimasi') is-invalid @enderror" name="tanggal_estimasi" 
            required data-aos="fade-right" data-aos-delay="300" value="{{ old('tanggal_estimasi') }}">
            @error('tanggal_estimasi')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror 
            </div>
            <div class="mb-3 mb-sm-2">
            <label for="ar_catatan" class="form-label" data-aos="fade-right" data-aos-delay="300">Catatan</label>
            <textarea type="text" class="form-control @error('catatan') is-invalid @enderror" name="ar_catatan" required
             rows="4" data-aos="fade-right" data-aos-delay="350"></textarea>
            @error('catatan')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
            </div>
            <button type="submit" class="btn btn-success mt-4 mb-4">
              Kirim Request
              <i class="fa fa-paper-plane"></i>
            </button>
          </form>
        </div>
        <div class="card-body col-lg-6 pl-lg-3 py-0 px-sm-3 px-3">
          <div class="card" data-aos="fade-left" data-aos-delay="150">
            <div class="card-header py-3 px-sm-3 px-2">
              <h6 class="m-0 font-weight-bold text-primary">Riwayat Request</h6>
            </div>
            <div class="card-body px-sm-3 px-2">
              <div class="row">
                @if($cek == 0)
                  <div class="col">
                    <div class="card border-danger mb-2">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-12">
                            <div class="text-center">
                              <i class="fas fa-info-circle"></i>
                              <i>Tidak Ada Riwayat request</i>
                            </div>
                          </div>                      
                        </div>
                      </div>
                    </div>
                  </div>
                @endif
  
                @if($cek > 0)
                <div class="col-12" style="overflow-y: auto; max-height: 285px;">
                  <table class="table table-bordered border" id="dataTable" cellspacing="0">
                    <thead>
                      <tr>
                        <th class="col-6 border border-secondary px-2">Request</th>
                        <th class="col-5 border border-secondary px-2">Tanggal</th>
                        <th class="col-1 border border-secondary px-2">Detail</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($request as $req)
                      <?php 
                        $tanggal = substr($req->created_at,-0,10);
                        ?>
                      <tr>
                        <td class="border-secondary px-2">{{ $req->ar_request }}</td>
                        <td class="border-secondary px-2">{{ $tanggal }}</td>
                        <td class="border-secondary px-2"> 
                          <a class="btn-sm btn-info btn-circle" href="{{ route('app_request.show',$req->id) }}"  data-toggle="tooltip" data-placement="left" title="Info">
                          <i class="fas fa-info-circle"></i>
                          </a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                @endif
              </div>
            </div>
          </div> 
        </div>
      </div>
    </div>
  </div>
  @endif
@endsection
