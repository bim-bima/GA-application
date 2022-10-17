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
            $cek = Asset::count();
            $dataasset = Asset::with('lokasiAsset','categoryasset')->paginate(5);
            return view('app.asset.index', compact(['dataasset','cek']));
        }

    public function create()
    {
            $lokasiAsset = MasterLokasiAsset::all();
        $categoryasset = MasterCategoryAsset::all();
        return view('app.asset.create', compact(['lokasiAsset','categoryasset']));
        
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'nama_asset'            => 'required|min:2|max:150', 
            'jumlah_asset'          => 'required', 
            'lokasi_asset'          => 'required',
            'category_asset'        => 'required',
            'tahun_pembelian_asset' => 'required|min:4|max:4|after:1900',
            'bulan_pembelian_asset' => 'required',
            'harga_asset'           => 'required|min:4|max:11', 
            'umur_manfaat_asset'    => 'required', 
        ]);
         $prefik = "L9";
         if( $request->umur_manfaat_asset == 4){
            $masa = 1;
         }elseif($request->umur_manfaat_asset == 8){
            $masa = 2;
         }elseif($request->umur_manfaat_asset == 12){
            $masa = 3;
         }elseif($request->umur_manfaat_asset == 16){
            $masa = 4;
         }elseif($request->umur_manfaat_asset == 20){
            $masa = 5;
         }else{
            $masa = 5;
         }
         $kelompok = $masa;
         $category = $request->category_asset;
         $ambil2 = $request->nama_asset;
         $subcategory = substr($ambil2,-0,3);
         $nourut = 001;
         $bulan = $request->bulan_pembelian_asset; 
         $ambil1 = $request->tahun_pembelian_asset; 
         $tahun = substr($ambil1,-2,2);
         $kodeasset = $prefik.'.'.$kelompok.'.'.$category.'.'.$subcategory;  

        for($c=1; $c<=$request->jumlah_asset; $c++){            
        $dataasset = new Asset;
        $dataasset->as_nama_asset = $request->nama_asset;
        $dataasset->as_jumlah = $request->jumlah_asset;
        $dataasset->as_mla_id = $request->lokasi_asset;
        $dataasset->as_mca_id = $request->category_asset;
        $dataasset->as_kode_asset = $kodeasset.'.'.$nourut++.$bulan.'.'.$tahun;;
        $dataasset->as_tahun_kepemilikan = $request->tahun_pembelian_asset;
        $dataasset->as_bulan = $request->bulan_pembelian_asset;
        $dataasset->as_harga = $request->harga_asset;
        $dataasset->as_umur_manfaat = $request->umur_manfaat_asset;
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


