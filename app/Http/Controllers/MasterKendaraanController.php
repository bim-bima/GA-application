<?php

namespace App\Http\Controllers;

use App\Models\MasterKendaraan;
use Illuminate\Http\Request;

class MasterKendaraanController extends Controller
{
    public function index(){

        $masterKendaraan = MasterKendaraan::all();
        return view('master.masterkendaraan.index',compact(['masterKendaraan']));
    }
    public function create()
    {
        return view('master.masterkendaraan.create');
    }

    public function store(Request $request)
    {
        MasterKendaraan::create($request->except(['_token','submit']));
        return redirect('/master_kendaraan');
    }

    // public function edit($id)
    // {
    //     $moken = Monitoring_Kendaraan::find($id);
    //     // dd($moken);
    //     return view('monitoring_kendaraan.edit',compact(['moken']));
    // }

    // public function update($id, Request $request)
    // {
    //     $moken = Monitoring_Kendaraan::find($id);
    //     $moken->update($request->except(['_token','submit']));
    //     return redirect('/monitoring-kendaraan');
    // }

    // public function destroy($id)
    // {
    //     $moken = Monitoring_Kendaraan::find($id);
    //     $moken->delete();
    //     return redirect('/monitoring-kendaraan');
    // }


}
