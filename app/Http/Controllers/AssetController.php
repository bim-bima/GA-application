<?php

namespace App\Http\Controllers;
use App\Models\Asset;
use App\Models\LokasiAsset;
use Illuminate\Http\Request;

class AssetController extends Controller
{
    public function index(){

        // $asset = Asset::paginate(2);
        $asset = Asset::all();
        return view('asset.index',compact(['asset']));
    }


    public function __invoke()
    {
        return view('asset.index2', [
            'title'  => 'One to Many lokasiasset',
            'lokasiAsset' => LokasiAsset::get(),
        ]);
    }
}
