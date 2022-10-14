@extends('layouts.main')
@section('content')
@include('sweetalert::alert')

<div class="container-fluid p-0">
  <div class="card" data-aos="fade-up" data-aos-delay="100">
    <div class="card-header px-3">
      <h6 class="m-0 font-weight-bold text-primary" data-aos="fade-right" data-aos-delay="600">List Perencanaan Aktivitas</h6>
    </div>
    <div class="row d-flex px-2 pb-0 pt-2">
      {{-- management --}}
      @if(auth()->user()->level == "management")
      <div class="card-body col-xl-7 pb-2 px-3">
        @foreach ($dataperencanaan as $perencanaan)
        <div class="card mb-3">
          <div class="card-body pt-3 pb-2">
            <div class="row d-flex justify-content-between">
              <div class="">
                <?php 
                $string = $perencanaan->ap_bulan;
                $result = preg_replace("/[^0-9]/", "",$string);

                $monthnum = $result;
                $dateObj = DateTime::createFromFormat('!m', $monthnum);
                $monthName = $dateObj->format('F');
                ?>
                <h5 class="card-title">{{ $monthName.'-'.$perencanaan->ap_tahun }}</h5>
              </div>
              <div class="">
                <a href="{{ route('app_perencanaan.show',$perencanaan->id) }}" class="btn-sm btn-primary btn-circle">
                  <i class="fas fa-eye"></i>
                </a>
                @if(auth()->user()->level == "general-affair")
                <form action="{{ route('app_perencanaan.destroy',$perencanaan->id) }}" method="post" class="d-inline">
                  @csrf
                  @method('delete')
                  <button class="btn-sm btn-danger btn-circle" type="submit">
                    <i class="fas fa-trash"></i>
                  </button>
                </form>
                @endif
              </div>
            </div>
          </div>
        </div>
        @endforeach
        {{ $dataperencanaan->links() }}
        <input type="hidden" class="delete_id" value="{{ $perencanaan->id }}">
      </div>
      @endif
      @if(auth()->user()->level == "general-affair")
      <div class="card-body col-lg-7 pb-2 px-3">
        @foreach ($dataperencanaan as $perencanaan)
        <div class="card mb-3" data-aos="fade-right" data-aos-delay="650">
          <div class="card-body pt-3 pb-2">
            <div class="row d-flex justify-content-between px-0">
              <div class="col-sm-5 px-1 py-1">
                <?php 
                $string = $perencanaan->ap_bulan;
                $result = preg_replace("/[^0-9]/", "",$string);

                $monthnum = $result;
                $dateObj = DateTime::createFromFormat('!m', $monthnum);
                $monthName = $dateObj->format('F');
                ?>
                <h5 class="card-title">{{ $monthName.'-'.$perencanaan->ap_tahun }}</h5>
              </div>
              <div class="py-1 px-1">
                <a href="{{ route('app_perencanaan.show',$perencanaan->id) }}" class="btn-sm btn-primary btn-circle"  data-toggle="tooltip" data-placement="left" title="Lihat">
                  <i class="fas fa-eye"></i>
                </a>
                <a href="{{ route('app_perencanaan.edit',$perencanaan->id) }}" class="btn-sm btn-success btn-circle"  data-toggle="tooltip" data-placement="left" title="Unduh">
                  <i class="fas fa-download"></i>
                </a>
                @if(auth()->user()->level == "general-affair")
                <form action="{{ route('app_perencanaan.destroy',$perencanaan->id) }}" method="post" class="d-inline">
                  @csrf
                  @method('delete')
                  {{-- <a href="" class="delete" data-confirm="Are you sure to delete this item?">Delete</a> --}}
                  <button type="submit" class="btn-sm btn-circle btn-danger btn-flat show_confirm" data-toggle="tooltip" title="Delete">
                    <i class="fas fa-trash"></i>
                  </button>
                  {{-- <button class="btn btn-danger btn-circle delete" type="submit"  data-toggle="tooltip" data-placement="left" title="Delete" data-confirm="Are you sure to delete this item?"> --}}
                </form>
                @endif
              </div>
            </div>
          </div>
        </div>
        @endforeach
        {{ $dataperencanaan->links() }}
      </div>
      @endif
      @if(auth()->user()->level == "general-affair")
      <div class="card-body col-lg-5 pb-2 pl-lg-1" data-aos="fade-left" data-aos-delay="650">
        <div class="card">
          <div class="card-header px-sm-3 px-2">
            <h6 class="font-weight-bold text-primary">Tambah List Perencanaan</h6>
          </div>
          <div class="card-body pt-3 px-sm-3 px-2">
            <form class="px-0" action="{{ route('app_perencanaan.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <label class="form-label">Bulan</label>
              <select name="ap_bulan" class="custom-select custom-select-md mb-3">
                <option value="-01">Januari</option>
                <option value="-02">Februari</option>
                <option value="-03">Maret</option>
                <option value="-04">April</option>
                <option value="-05">Mei</option>
                <option value="-06">Juni</option>
                <option value="-07">Juli</option>
                <option value="-08">Agustus</option>
                <option value="-09">September</option>
                <option value="-10">Oktober</option>
                <option value="-11">November</option>
                <option value="-12">Desember</option>
              </select>
              <label class="form-label">Tahun</label>
              <input name="ap_tahun" type="text" class="form-control" required>                 
              <button type="submit" class="btn btn-success mt-4">
                <i class="fa fa-plus-circle"></i>
                Tambah
              </button>
            </form>
          </div>
        </div>
      </div>
      @endif
    </div>
  </div>
</div>
@endsection
{{-- <input name="ap_tahun" type="number" class="form-control" required>                 
<button type="submit" class="btn btn-primary my-3">Tambah</button> --}}
