@extends('layouts.main')

@section('content')

@include('sweetalert::alert')

<div class="card shadow mb-4" data-aos="fade-up" data-aos-delay="50">
  @if(auth()->user()->level == "management")
  @foreach ($ajuan as $pengajuan)
  <div class="card">
    <div class="card-header">
      <h6 class="m-0 font-weight-bold text-primary" data-aos="fade-right" data-aos-delay="600">Persetujuan</h6>
    </div>
    <form action="{{ route('app_pengajuan.update',$pengajuan->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('put')
      <div class="card-body">
        <div class="row">
          <div class="col-lg-6">
            <div class="d-flex row mb-4">
              <div for="ap_nama_pengajuan" class="form-label text-primary col-12 col-sm-4 col-md-4 col-lg-5 col-xl-4 font-weight-bold pr-0">Nama Pengajuan</div>
              <div class="card-text col-sm-5 col-md-8 col-lg-6 col-xl-5 col-12 pl-sm-0">{{ $pengajuan->ap_nama_pengajuan }}</div>
            </div>
            <div class="d-flex row mb-4">
              <div for="ap_mjp_id" class="form-label text-primary col-12 col-sm-4 col-md-4 col-lg-5 col-xl-4 font-weight-bold pr-0">Jenis Pengajuan</div>
              <div class="card-text col-sm-5 col-md-6 col-lg-6 col-xl-5 col-12 pl-sm-0">{{ $pengajuan->jenispengajuan->mjp_jenis }}</div>
            </div>
            <div class="d-flex row mb-4">
              <div for="ap_mv_id" class="form-label text-primary col-12 col-sm-4 col-md-4 col-lg-5 col-xl-4 font-weight-bold pr-0">Vendor</div>
              <div class="card-text col-sm-5 col-md-6 col-lg-6 col-xl-5 col-12 pl-sm-0">{{ $pengajuan->vendor->mv_nama_vendor }}</div>
            </div>
            <div class="d-flex row mb-4">
              <div for="ap_biaya" class="form-label text-primary col-12 col-sm-4 col-md-4 col-lg-5 col-xl-4 font-weight-bold pr-0">Biaya</div>
              <div class="card-text col-sm-5 col-md-6 col-lg-6 col-xl-5 col-12 pl-sm-0">{{ $pengajuan->ap_biaya }}</div>
            </div>
            <div class="d-flex row mb-4">
              <div for="ap_mp_id" class="form-label text-primary col-12 col-sm-4 col-md-4 col-lg-5 col-xl-4 font-weight-bold pr-0">PIC</div>
              <div class="card-text col-sm-5 col-md-6 col-lg-6 col-xl-5 col-12 pl-sm-0">{{ $pengajuan->pic->mp_nama }}</div>
            </div>
            <div class="d-flex row mb-4">
              <div for="ap_catatan" class="form-label text-primary col-12 col-sm-4 col-md-4 col-lg-5 col-xl-4 font-weight-bold pr-0">Catatan</div>
              <div class="card-text col-sm-8 col-md-8 col-lg-7 col-xl-8 col-12 pl-sm-0">{{ $pengajuan->ap_catatan }}</div>
            </div>
            <div class="d-flex row mb-4">
              <div for="ap_tanggal_pengadaan" class="form-label text-primary col-12 col-sm-4 col-md-4 col-lg-5 col-xl-4 font-weight-bold pr-0">Tanggal</div>
              <div class="card-text col-sm-5 col-md-6 col-lg-6 col-xl-5 col-12 pl-sm-0 text-danger">{{ $pengajuan->ap_tanggal_pengadaan }}</div>
            </div>
          </div>
          <div class="col-lg-6 pl-xl-4">
            <div class="mb-3">
              <label for="ap_reason" class="form-label">Catatan</label>
              <textarea type="text" class="form-control @error('reason') is-invalid @enderror" name="ap_reason" required rows="5"></textarea>
              @error('catatan')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>
            <fieldset class="d-flex row">
              <legend class="col-form-label col-12 col-sm-6 col-md-5 col-lg-6 col-xl-5 text-primary font-weight-bold float-sm-left pt-0">Setujui pengajuan ?</legend>
              <div class="col-sm-4 col-lg-5 col-xl-4 col-12 pl-sm-0">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="ap_status" id="gridRadios1" value="setujui" checked>
                  <label class="form-check-label p-sm-0" for="gridRadios1">
                    Setujui 
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="ap_status" id="gridRadios2" value="tidak setuju">
                  <label class="form-check-label p-sm-0" for="gridRadios2">
                    Tidak Setujui
                  </label>
                </div>
              </div>
            </fieldset>
            <button type="submit" class="btn btn-primary mt-2">
              Kirim
              <i class="fa fa-paper-plane"></i>
            </button>
          </div>
        </div>          
      </div>
    </form>
  </div>
  @endforeach     
  @endif

  @if(auth()->user()->level == "general-affair")
  <div class="card-header py-3 px-sm-3 px-2">
    <h6 class="m-0 font-weight-bold text-primary" data-aos="fade-right" data-aos-delay="500">Buat pengajuan</h6>
  </div>
  <div class="card-body px-sm-3 px-2">
    <form action="{{ route('app_pengajuan.store') }}" method="POST" enctype="multipart/form-data" class="row">
      @csrf
      <div class="col-md-6 mb-2" data-aos="fade-right" data-aos-delay="600">
        <label for="ap_nama_pengajuan" class="form-label">Nama Pengajuan</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="ap_nama_pengajuan" required>
        @error('nama')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-md-6 mb-2" data-aos="fade-left" data-aos-delay="600">
        <label for="ap_mjp_id" class="form-label">Jenis Pengajuan</label>
        <select name="ap_mjp_id" class="form-control @error('jenis') is-invalid @enderror" required>
          <option value="">Jenis Pengajuan</option>
          @foreach ($jenispengajuan as $jenis)
          <option value="{{ $jenis->id }}">{{ $jenis->mjp_jenis}}</option>
          @endforeach    
        </select>
        @error('jenis')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-md-6 mb-2" data-aos="fade-right" data-aos-delay="700">
        <label for="ap_mv_id" class="form-label">Vendor</label>
        <select name="ap_mv_id" class="form-control @error('ap_mv_id') is-invalid @enderror" required>
          <option value="">Pilih Vendor</option>
          @foreach ($vendor as $ven)
          <option value="{{ $ven->id }}">{{ $ven->mv_nama_vendor}}</option>
          @endforeach    
        </select>
        @error('ap_mv_id')
          <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-md-6 mb-2" data-aos="fade-left" data-aos-delay="700">
        <label for="ap_biaya" class="form-label">Biaya</label>
        <input type="text" class="form-control @error('biaya') is-invalid @enderror" name="ap_biaya" required>
        @error('biaya')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-md-6 mb-2" data-aos="fade-right" data-aos-delay="800">
        <label for="ap_tanggal_pengadaan" class="form-label">Tanggal Dibutuhkan</label>
        <input type="date" class="form-control @error('pengadaan') is-invalid @enderror" name="ap_tanggal_pengadaan" >
        @error('pengadaan')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-md-6 mb-2" data-aos="fade-left" data-aos-delay="800">
        <label for="ap_mp_id" class="form-label">PIC</label>
        <select name="ap_mp_id" class="form-control @error('ap_mp_id') is-invalid @enderror" required>
          <option value="">Pilih PIC</option>
          @foreach ($pic as $pi)
          <option value="{{ $pi->id }}">{{ $pi->mp_nama}}</option>
          @endforeach    
        </select>
        @error('ap_mp_id')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-12 mb-2" data-aos="zoom-in" data-aos-delay="800">
        <label for="ap_catatan" class="form-label">Catatan</label>
        <textarea type="text" class="form-control @error('catatan') is-invalid @enderror" name="ap_catatan" required rows="3"></textarea>
        @error('catatan')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-12">
        <button type="submit" class="btn btn-success mt-3 mb-1">
          Kirim Pengajuan
          <i class="fa fa-paper-plane"></i>
        </button>
      </div>
    </form>
  </div>
  @endif
</div>
<div class="card shadow mb-4" data-aos="fade-down" data-aos-delay="100">
  <div class="card-header py-3 px-sm-3 px-2">
    <h6 class="m-0 font-weight-bold text-primary" data-aos="fade-right" data-aos-delay="500">Riwayat Pengajuan</h6>
  </div>
  <div class="card-body px-sm-3 px-2">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0" data-aos="zoom-in" data-aos-delay="600">
        <thead>
          <tr>
            <th class="border border-secondary col-1 col-sm-3">Tanggal</th>
            <th class="border border-secondary col-2 col-sm-5">Nama Pengajuan</th>
            <th class="border border-secondary col-2 col-sm-3">Status</th>
            <th class="border border-secondary col-1">Detail</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($datapengajuan as $pengajuan)
          <tr>
            <?php 
              $tanggal1 = $pengajuan->created_at;
              $tanggal = substr($tanggal1,-0,10);
            ?>
            <td class="border-secondary">{{ $tanggal }}</td>
            <td class="border-secondary">{{ $pengajuan->ap_nama_pengajuan }}</td>
            <td class="border-secondary">{{ $pengajuan->ap_status }}</td>
            <td class="border-secondary">
              <a class="btn-sm btn-info btn-circle mb-xl-0 mb-2" href="{{ route('app_pengajuan.show',$pengajuan->id) }}"  data-toggle="tooltip" data-placement="left" title="Info">
                <i class="fas fa-info-circle"></i>
              </a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
     <!-- {{ $datapengajuan->links() }} -->
    </div>
  </div>
</div>
@endsection

