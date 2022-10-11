<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use App\Models\Asset;
use App\Models\MasterLokasiAsset;
use App\Models\MasterCategoryAsset;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AssetController extends Controller
{
    public function index()
        {
            $dataasset = Asset::with('lokasiAsset','categoryasset')->paginate(5);
            return view('app.asset.index', compact(['dataasset']));
        }

    public function create()
    {
        $lokasiAsset = MasterLokasiAsset::all();
        $categoryasset = MasterCategoryAsset::all();
        return view('app.asset.create', compact(['lokasiAsset','categoryasset']));
        
    }
    
    public function store(Request $request)
    {
        // $request->validate([
        //     'as_nama_asset'=>'required|min:2|max:100', 
        //     'as_mla_id'=>'required',
        //     'as_kode_asset'=>'min:2|max:100', 
        //     'as_harga'=>'required|min:2|max:100', 
        //     'as_nilai_residu'=>'min:2|max:100', 
        //     'as_umur_manfaat'=>'min:2|max:100', 
        // ]);
         $prefik = "L9";
         if( $request->as_umur_manfaat == 4){
            $masa = 1;
         }elseif($request->as_umur_manfaat == 8){
            $masa = 2;
         }elseif($request->as_umur_manfaat == 12){
            $masa = 3;
         }elseif($request->as_umur_manfaat == 16){
            $masa = 4;
         }elseif($request->as_umur_manfaat == 20){
            $masa = 5;
         }else{
            $masa = 5;
         }
         $kelompok = $masa;
         $category = $request->as_mca_id;
         $ambil2 = $request->as_nama_asset;
         $subcategory = substr($ambil2,-0,3);
         $nourut = 001;
         $bulan = $request->as_bulan; 
         $ambil1 = $request->as_tahun_kepemilikan; 
         $tahun = substr($ambil1,-2,2);
         $kodeasset = $prefik.'.'.$kelompok.'.'.$category.'.'.$subcategory;  

        for($c=1; $c<=$request->as_jumlah; $c++){            
        $dataasset = new Asset;
        $dataasset->as_nama_asset = $request->as_nama_asset;
        $dataasset->as_jumlah = $request->as_jumlah;
        $dataasset->as_mla_id = $request->as_mla_id;
        $dataasset->as_mca_id = $request->as_mca_id;
        $dataasset->as_kode_asset = $kodeasset.'.'.$nourut++.$bulan.'.'.$tahun;;
        $dataasset->as_tahun_kepemilikan = $request->as_tahun_kepemilikan;
        $dataasset->as_bulan = $request->as_bulan;
        $dataasset->as_harga = $request->as_harga;
        $dataasset->as_umur_manfaat = $request->as_umur_manfaat;
        $dataasset->save();
        }
        Alert::success('Berhasil', 'Data Berhasil Ditambahkan');
        return redirect()->route('app_asset.index');
    }

    public function show($id)
    {
        $asset = Asset::find($id);
        return view('app.asset.show', compact(['asset']));
    }

    public function edit($id)
    {
        $asset = Asset::find($id);
        $lokasiAsset = MasterLokasiAsset::all();
        $categoryAsset = MasterCategoryAsset::all();
    return view('app.asset.edit', compact(['asset','lokasiAsset','categoryAsset']));

    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'as_nama_asset' => 'required',
            'as_mla_id' => 'required',
            'as_mca_id' => 'required',
            'as_kode_asset' => 'required',
            'as_tahun_kepemilikan' => 'required',
            'as_harga' => 'required',
            'as_umur_manfaat' => 'required',
            'as_bulan' => 'required',
        ]);
        $dataasset = Asset::find($id);
        $prefik = "L9";
         if( $request->as_umur_manfaat == 4){
            $masa = 1;
         }elseif($request->as_umur_manfaat == 8){
            $masa = 2;
         }elseif($request->as_umur_manfaat == 12){
            $masa = 3;
         }elseif($request->as_umur_manfaat == 16){
            $masa = 4;
         }elseif($request->as_umur_manfaat == 20){
            $masa = 5;
         }else{
            $masa = 5;
         }
         $kelompok = $masa;
         $category = $request->as_mca_id;
         $ambil2 = $request->as_nama_asset;
         $subcategory = substr($ambil2,-0,3);
         $nourut = 001;
         $bulan = $request->as_bulan; 
         $tahun = $request->as_tahun_kepemilikan; 
         $kodeasset = $prefik.'.'.$kelompok.'.'.$category.'.'.$subcategory.'.'.$nourut.$bulan.'.'.$tahun;  

        $dataasset->as_nama_asset = $request->as_nama_asset;
        $dataasset->as_mla_id = $request->as_mla_id;
        $dataasset->as_mca_id = $request->as_mca_id;
        $dataasset->as_kode_asset = $kodeasset;
        $dataasset->as_tahun_kepemilikan = $request->as_tahun_kepemilikan;
        $dataasset->as_harga = $request->as_harga;
        $dataasset->as_umur_manfaat = $request->as_umur_manfaat;
        $dataasset->as_bulan = $request->as_bulan;
        $dataasset->save();
        Alert::success('Berhasil', 'Data Berhasil Diedit');
        return redirect()->route('app_asset.index');

    }
    public function destroy($id)
    {
        $dataasset = Asset::find($id);
        $dataasset->delete();
      //   Alert::success('Berhasil', 'Data Berhasil Dihapus');
      //   return redirect()->route('app_asset.index'); 
        return response()->json(['status' => 'Data Berhasil di hapus!']);   
    }




}


