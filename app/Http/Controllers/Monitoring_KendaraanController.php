<?php

namespace App\Http\Controllers;

use App\Models\Monitoring_Kendaraan;
use Illuminate\Http\Request;

class Monitoring_KendaraanController extends Controller
{
    public function index(){
       $mk = Monitoring_Kendaraan::all();
    //    dd($mk);
        return view('monitoring_kendaraan.index', compact(['mk']));
    }

    public function create()
    {
        return view('monitoring_kendaraan.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        Monitoring_Kendaraan::create($request->except(['_token','submit']));
        return redirect('/monitoring-kendaraan');
    }

    public function edit($id)
    {
        $moken = Monitoring_Kendaraan::find($id);
        // dd($moken);
        return view('monitoring_kendaraan.edit',compact(['moken']));
    }

    public function update($id, Request $request)
    {
        $moken = Monitoring_Kendaraan::find($id);
        $moken->update($request->except(['_token','submit']));
        return redirect('/monitoring-kendaraan');
    }

    public function destroy($id)
    {
        $moken = Monitoring_Kendaraan::find($id);
        $moken->delete();
        return redirect('/monitoring-kendaraan');
    }





}

