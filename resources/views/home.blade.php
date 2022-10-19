@extends('layouts.main')
@section('content')
<div class="card shadow mb-4" data-aos="fade-up" data-aos-delay="50">
  @if(auth()->user()->level == "management")
  <div class="card-header py-3 px-sm-4 px-2">
    <h6 class="m-0 font-weight-bold text-primary">Dashboard</h6>
  </div>
  <div class="card-body px-sm-4">
    <div class="row px-sm-2">
      <h6 class="font-weight-bold text-primary">Aktivitas GA Hari Ini</h6>
      <table class="table table-bordered border" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th class="border border-secondary px-2">Aktivitas</th>
            <th class="border border-secondary px-2">Prioritas</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($aktivitas as $today)
          <tr>
            <td class="border-secondary px-2">{{ $today->title }}</td>
            <td class="border-secondary px-2">{{ $today->prioritas }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
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
              <td colspan="2">
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
  @endif

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
            <div class="card-header px-sm-3 px-2">
              <h6 class="font-weight-bold text-primary">Riwayat Request</h6>
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
</div>
@endsection
