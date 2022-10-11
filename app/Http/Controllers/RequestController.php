<?php

namespace App\Http\Controllers;
use App\Models\AppRequest;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class RequestController extends Controller
{
        public function index()
        {
            $datarequest = AppRequest::paginate(5);
            return view('app.request.index', compact(['datarequest']));
        }

        public function store(Request $request)
        {
        $request->validate([
        'ar_request' => 'required|min:5',
        ]);
        $datarequest = new AppRequest();
        $datarequest->ar_request = $request->ar_request;
        $datarequest->ar_catatan = $request->ar_catatan;
        $datarequest->save();
        Alert::success('Berhasil', 'Data Berhasil Dikirim');
        return redirect()->route('app_request');
        }
        
        public function destroy($id)
        {
            $id = AppRequest::find($id);
            $id->delete();
        // Alert::success('Berhasil', 'Data Berhasil Dihapus');
        // return redirect()->route('app_request.index');
        return response()->json(['status' => 'Data Berhasil di hapus!']);
        }
}
