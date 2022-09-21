<?php

namespace App\Http\Controllers;

use App\Models\Aktivitas;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AktivitasController extends Controller
{
    public function index()
    {
        $dataAktivitas = Aktivitas::all();
        foreach ($dataAktivitas as $aktivitas) 
        {
            $events[]=[
            'id'    => $aktivitas->id,
            'title' => $aktivitas->title,
            'start' => $aktivitas->start_date,
            'end' => $aktivitas->end_date,
            ];
        }
        return view('app.aktivitas.index', ['events' => $events]);
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string'
        ]);

        $aktivitas = Aktivitas::create([
            'title' => $request->title,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);
        return response()->json($aktivitas); 
    }
    


}
