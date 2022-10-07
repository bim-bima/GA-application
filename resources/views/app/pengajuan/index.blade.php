@extends('layouts.main')

@section('content')

@include('sweetalert::alert')

<div class="card shadow mb-4">
  <div class="card shadow mb-4">
@if(auth()->user()->level == "management")

  @foreach ($ajuan as $pengajuan)
    <div class="card">
      <div class="card-header">

      </div>
      <form action="{{ route('app_pengajuan.update',$pengajuan->id) }}" method="POST" enctype="multipart/form-data">
      @csrf
      @method('put')
      <div class="card-body">
        <h5 class="card-title">{{ $pengajuan->ap_nama_pengajuan }}</h5>
        <p class="card-text">{{ $pengajuan->ap_catatan }}</p>
        <p class="card-text">{{ $pengajuan->jenispengajuan->mjp_jenis }}</p>
        <p class="card-text">{{ $pengajuan->vendor->mv_nama_vendor }}</p>
        <p class="card-text">{{ $pengajuan->ap_biaya }}</p>
        <p class="card-text">{{ $pengajuan->pic->mp_nama }}</p>
        <p class="card-text text-danger"><small>{{ $pengajuan->ap_tanggal_pengadaan }}</small></p>
        <fieldset class="form-group row">
    <legend class="col-form-label col-sm-4 float-sm-left pt-0">Setujui pengajuan ?</legend>
    <div class="col-sm-8">
      <div class="form-check">
        <input class="form-check-input" type="radio" name="ap_status" id="gridRadios1" value="setujui" checked>
        <label class="form-check-label" for="gridRadios1">
          Setujui 
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="ap_status" id="gridRadios2" value="tidak setuju">
        <label class="form-check-label" for="gridRadios2">
          Tidak Setujui
        </label>
      </div>
    </div>
  </fieldset>

  <label for="ap_reason" class="form-label">Catatan</label>
      <input type="text" class="form-control @error('reason') is-invalid @enderror" name="ap_reason" required>
      @error('reason')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
        <button type="submit" class="btn btn-primary my-3">Kirim</button>
      </div>
      </form>
    </div>
   @endforeach     
@endif


@if(auth()->user()->level == "general-affair")
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Buat pengajuan</h6>
  </div>
  <div class="card-body">
    <form action="{{ route('app_pengajuan.store') }}" method="POST" enctype="multipart/form-data" class="col-lg-6">
      @csrf
      <label for="ap_nama_pengajuan" class="form-label">Nama Pengajuan</label>
      <input type="text" class="form-control @error('nama') is-invalid @enderror" name="ap_nama_pengajuan" required>
      @error('nama')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror

      <div class="col-md-6">
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

      <div class="col-md-6">
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

      <label for="ap_biaya" class="form-label">Biaya</label>
      <input type="text" class="form-control @error('biaya') is-invalid @enderror" name="ap_biaya" required>
      @error('biaya')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
      <label for="ap_catatan" class="form-label">Catatan</label>
      <input type="text" class="form-control @error('catatan') is-invalid @enderror" name="ap_catatan" required>
      @error('catatan')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror
      <label for="ap_tanggal_pengadaan" class="form-label">Tanggal Dibutuhkan</label>
      <input type="date" class="form-control @error('pengadaan') is-invalid @enderror" name="ap_tanggal_pengadaan" >
      @error('pengadaan')
      <div class="invalid-feedback">{{ $message }}</div>
      @enderror

      <div class="col-md-6">
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

      <input type="text" class="form-control d-none" name="ap_status" value="null">
      <input type="text" class="form-control d-none" name="ap_status" value="null">


      <button type="submit" class="btn btn-success my-3">
        <i class="fa fa-plus-circle"></i>
        Kirim Pengajuan
      </button>
</form>
  </div>
</div>

@endif

    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Riwayat Pengajuan</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered border" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
                <th>Tanggal</th>
                <th>Nama Pengajuan</th>
                <th>Jenis</th>
                <th>Vendor</th>
                <th>Biaya</th>
                <th>Catatan</th>
                <th>Tanggal Di Butuhkan</th>
                <th>PIC</th>
                <!-- <th>Status</th> -->
            </tr>
          </thead>
          <tbody>
            <?php 

             ?>
            @foreach ($setuju as $pengajuan)
            <tr>
              <td>{{ $pengajuan->created_at }}</td>
              <td>{{ $pengajuan->ap_nama_pengajuan }}</td>
              <td>{{ $pengajuan->jenispengajuan->mjp_jenis }}</td>
              <td>{{ $pengajuan->vendor->mv_nama_vendor }}</td>
              <td>{{ $pengajuan->ap_biaya }}</td>
              <td>{{ $pengajuan->ap_catatan }}</td>
              <td>{{ $pengajuan->ap_tanggal_pengadaan }}</td>
              <td>{{ $pengajuan->pic->mp_nama }}</td>
              <!-- <td>{{ $pengajuan->ap_status }}</td> -->
              
            </tr>
            @endforeach
          </tbody>
        </table>
       <!-- {{ $datapengajuan->links() }} -->

      </div>
    </div>
  </div>
@endsection

