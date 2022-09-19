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
            'title' => $aktivitas->title,
            'start' => $aktivitas->start_date,
            'end' => $aktivitas->end_date
            ];
        }
        return view('app.aktivitas.index', ['events' => $events]);
    }

}
