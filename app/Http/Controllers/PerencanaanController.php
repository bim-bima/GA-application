<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Perencanaan;
use App\Models\Aktivitas;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class PerencanaanController extends Controller
{
    public function index()
    {
        $dataperencanaan = Perencanaan::paginate(4);
        return view('app.perencanaan.index', compact(['dataperencanaan']));
    }
    public function store(Request $request)
    {
        $request->validate([
        // 'mp_nama' => 'required|min:5|max:15',
        ]);
        $dataperencanaan = new Perencanaan();
        $dataperencanaan->ap_bulan = $request->ap_bulan;
        $dataperencanaan->ap_tahun = $request->ap_tahun;
        $dataperencanaan->save();
        Alert::success('Berhasil', 'Data Berhasil Ditambahkan');
        return redirect()->route('app_perencanaan.index');
    }
    public function show($id)
    {
        $dataAktivitas = Aktivitas::all();
        foreach ($dataAktivitas as $aktivitas){
            $color = null;
            if($aktivitas->prioritas == 'utama'){
                $color = 'red';
            }elseif($aktivitas->prioritas == 'sedang'){
                $color = 'green';
            }else{
                $color = 'blue';
            }

            $events[]=[
            'id'    => $aktivitas->id,
            'title' => $aktivitas->title,
            'start' => $aktivitas->start_date,
            'end'   => $aktivitas->end_date,
            'deskripsi'   => $aktivitas->deskripsi,
            'penanganan'   => $aktivitas->penanganan,
            'prioritas'   => $aktivitas->prioritas,
            'color'   => $color,
            ];
        }
        $perencanaan = Perencanaan::find($id);
        return view('app.aktivitas.index', ['events' => $events], compact(['perencanaan']) );
        // compact(['lokasiAsset'])
    }
    public function destroy($id)
    {
        $perencanaan = Perencanaan::find($id);
        $tahun = $perencanaan->ap_tahun; 
        $bulan = $perencanaan->ap_bulan;
        $start_date = $tahun.$bulan; 
        DB::table("app_perencanaan")->where("id", $id)->delete();
        DB::table("app_aktivitas")->where("start_date", 'LIKE', '%'.$start_date.'%')->delete();

        // $id = Perencanaan::find($id);
        // $id->delete();

        Alert::success('Berhasil', 'Data Berhasil Dihapus');
        return redirect()->route('app_perencanaan.index');
    }



}
