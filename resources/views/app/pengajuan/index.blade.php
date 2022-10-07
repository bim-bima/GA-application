@extends('layouts.main')

@section('content')

@include('sweetalert::alert')

<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Buat pengajuan</h6>
  </div>
  <div class="card-body">
    <form action="{{ route('app_pengajuan.store') }}" method="POST" enctype="multipart/form-data" class="row">
      <div class="col-md-6 mb-2">
        @csrf
        <label for="ap_nama_pengajuan" class="form-label">Nama Pengajuan</label>
        <input type="text" class="form-control @error('nama') is-invalid @enderror" name="ap_nama_pengajuan" required>
        @error('nama')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      

      <div class="col-md-6 mb-2">
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

      <div class="col-md-6 mb-2">
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
      <div class="col-md-6 mb-2">
        <label for="ap_biaya" class="form-label">Biaya</label>
        <input type="text" class="form-control @error('biaya') is-invalid @enderror" name="ap_biaya" required>
        @error('biaya')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-md-6 mb-2">
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
      
      <div class="col-md-6 mb-2">
        <label for="ap_tanggal_pengadaan" class="form-label">Tanggal Dibutuhkan</label>
        <input type="date" class="form-control @error('pengadaan') is-invalid @enderror" name="ap_tanggal_pengadaan" >
        @error('pengadaan')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
      </div>
      <div class="col-12 mb-2">
        <label for="ap_catatan" class="form-label">Catatan</label>
        <textarea type="text" class="form-control @error('catatan') is-invalid @enderror" name="ap_catatan" required rows="3"></textarea>
        @error('catatan')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        {{-- <label for="ap_catatan" class="form-label">Catatan</label>
        <input type="text" class="form-control @error('catatan') is-invalid @enderror" name="ap_catatan" required> --}}
      </div>
      
      <div class="col-md-6">
        <button type="submit" class="btn btn-success my-3">
          <i class="fa fa-plus-circle"></i>
          Kirim Pengajuan
        </button>
      </div>
    </form>
  </div>
</div>
<div class="card shadow mb-4">
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
          </tr>
        </thead>
        <tbody>
          @foreach ($datapengajuan as $pengajuan)
          <tr>
            <td>{{ $pengajuan->created_at }}</td>
            <td>{{ $pengajuan->ap_nama_pengajuan }}</td>
            <td>{{ $pengajuan->jenispengajuan->mjp_jenis }}</td>
            <td>{{ $pengajuan->vendor->mv_nama_vendor }}</td>
            <td>{{ $pengajuan->ap_biaya }}</td>
            <td>{{ $pengajuan->ap_catatan }}</td>
            <td>{{ $pengajuan->ap_tanggal_pengadaan }}</td>
            <td>{{ $pengajuan->pic->mp_nama }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
     {{ $datapengajuan->links() }}
    </div>
  </div>
</div>
@endsection

