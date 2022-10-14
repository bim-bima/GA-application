<?php

namespace App\Http\Controllers;

use Notification;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\MasterKendaraan;
use App\Models\Aktivitas;
use App\Models\Kendaraan;
use Illuminate\Support\Facades\DB;
use App\Notifications\SlackNotification;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
          $now = Carbon::now();
          $tgl_sekarang =  $now->toDateString();
          $tgl_besok = date('Y-m-d',strtotime("+1 day",strtotime(date("Y-m-d"))));
          $jumlah = Aktivitas::where('reminder', '=', 'reminder', 'and')->where('start_date', '=', $tgl_besok)->count();
          $reminder = Aktivitas::where('reminder', '=', 'reminder', 'and')->where('start_date', '=', $tgl_besok)->get();

    if(auth()->user()->level == "general-affair"){
            if($jumlah > 0){
        Notification::route('slack', env('SLACK_WEBHOOK'))->notify(new SlackNotification());
            }
     }
          // echo $mytime->toDateString();
          $aktivitas = Aktivitas::where('start_date', '=', $tgl_sekarang)->get();
          $datakendaraan = MasterKendaraan::paginate(8);

          $pengguna = Auth::user()->name;
          $booking = Kendaraan::with('namaKendaraan','pic')->Where('ak_pengguna',$pengguna)->get(); 


          return view('home',compact(['datakendaraan','aktivitas','booking']));
    }
}
