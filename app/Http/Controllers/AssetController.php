<?php

namespace App\Http\Controllers;
use App\Models\Asset;

use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function index(){
        $asset = Asset::all();
         return view('asset.index', compact(['asset']));
     }

     public function create()
     {
         return view('asset.create');
     }

     public function store(Request $request)
     {
         // dd($request->all());
         Asset::create($request->except(['_token','submit']));
         return redirect('/asset');
     }

     public function edit($id)
     {
         $asset = Asset::find($id);
         return view('asset.edit',compact(['asset']));
     }

     public function update($id, Request $request)
     {
         $asset = Asset::find($id);
         $asset->update($request->except(['_token','submit']));
         return redirect('/asset');
     }

     public function destroy($id)
     {
         $asset = Asset::find($id);
         $asset->delete();
         return redirect('/asset');
     }

}
