<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;
use App\Models\MasterVendor;
use App\Models\MasterPic;
use App\Models\MasterJenisPengajuan;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;


class PengajuanController extends Controller
{
        /**
        * Display a listing of the resource.
        *
        * @return \Illuminate\Http\Response
        */
        public function index()
        {
            $datapengajuan = Pengajuan::with('vendor','pic','jenispengajuan')->paginate(10);
            // $datapengajuan = Pengajuan::whereHas('vendor','pic','jenispengajuan', function($q){$q->where('ap_status', 'disetujui');})->get();
            $vendor = MasterVendor::all();
            $pic = MasterPic::all();
            $jenispengajuan = MasterJenisPengajuan::all();
            // $datapengajuan = Pengajuan::where('ap_status', 'tidak setuju')->get();
            $ajuan = Pengajuan::where('ap_status', 'menunggu persetujuan')->get();
            $setuju = Pengajuan::where('ap_status', 'setujui')->with('vendor')->get();
            return view('app.pengajuan.index', compact(['datapengajuan','vendor','pic','jenispengajuan','setuju','ajuan']));
        }
        /**
        * Show the form for creating a new resource.
        *
        * @return \Illuminate\Http\Response
        */
        public function create()
        {

        }
        /**
        * Store a newly created resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @return \Illuminate\Http\Response
        */
        public function store(Request $request)
        {
        // $request->validate([
        // 'ap_nama_pengajuan' => 'required|min:5|max:200',
        // 'ap_mjp_id' => 'required|min:5|max:200',
        // 'ap_mv_id' => 'nullable',
        // 'ap_biaya' => 'nullable',
        // 'ap_catatan' => 'min:5|max:500',
        // 'ap_tanggal_pengadaan' => 'nullable',
        // 'ap_mp_id' => 'nullable',
        // 'ap_status' => 'nullable',
        // ]);
        $pengajuan = new Pengajuan();
        $pengajuan->ap_nama_pengajuan = $request->ap_nama_pengajuan;
        $pengajuan->ap_mjp_id = $request->ap_mjp_id;
        $pengajuan->ap_mv_id = $request->ap_mv_id;
        $pengajuan->ap_biaya = $request->ap_biaya;
        $pengajuan->ap_catatan = $request->ap_catatan;
        $pengajuan->ap_tanggal_pengadaan = $request->ap_tanggal_pengadaan;
        $pengajuan->ap_mp_id = $request->ap_mp_id;
        $pengajuan->ap_status = 'menunggu persetujuan';
        $pengajuan->ap_reason = $request->ap_reason;
        $pengajuan->save();
        Alert::success('Berhasil', 'Data Berhasil Diajukan');
        return redirect()->route('app_pengajuan.index');
        }
        /**
        * Display the specified resource.
        *
        * @param  \App\MasterPic  $pic
        * @return \Illuminate\Http\Response
        */
        public function update(Request $request, $id)
        {
        $setujui = Pengajuan::find($id);
        $setujui->ap_status = $request->ap_status;
        $setujui->ap_reason = $request->ap_reason;
        $setujui->save();
        Alert::success('Berhasil', 'Pengajuan Berhasil Dikirim');
        return redirect()->route('app_pengajuan.index');
        }
        // public function show(MasterPic $pic)
        // {
        // return view('',compact(''));
        // }
        /**
        * Update the specified resource in storage.
        *
        * @param  \Illuminate\Http\Request  $request
        * @param  \App\MasterPic  $pic
        * @return \Illuminate\Http\Response
        */
        public function show($id)
        {
        $pengajuan = Pengajuan::find($id);
        return view('app.pengajuan.show', compact(['pengajuan']));
        }
}

