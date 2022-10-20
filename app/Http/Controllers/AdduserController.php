<?php
namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class AdduserController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        // $cek = MasterPic::count();
        // $datapic = MasterPic::paginate(8);
        return view('app.adduser.index');
    }
    public function store(Request $request)
    {
        // $request->validate([
        // 'name' => 'required|string|max:255',
        // 'level' => 'required|string',
        // 'email' => 'required|string|email|max:255|unique:users',
        // 'password' => 'required|string|min:8|confirmed',
        // ]);
        $verified = Carbon::now();
        $verified_at = $verified->toDateTimeString(); 

        $datauser = new User();
        $datauser->name = $request->name;
        $datauser->level = $request->level;
        $datauser->email = $request->email;
        $datauser->email_verified_at = $verified_at;
        $datauser->password = Hash::make($request->password);
        $datauser->save();
        Alert::success('Berhasil', 'Data Berhasil Ditambahkan');
        return redirect()->route('add_user.index');
        dd('success');
    }
}
