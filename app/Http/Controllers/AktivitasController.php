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
        foreach ($dataAktivitas as $aktivitas){
            $color = null;
            if($aktivitas->title == 'my event'){
                $color = '#924ACE';
            }

            $events[]=[
            'id'    => $aktivitas->id,
            'title' => $aktivitas->title,
            'start' => $aktivitas->start_date,
            'end'   => $aktivitas->end_date,
            'color' => 'black'
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

        $color = null;
        if($aktivitas->title == 'event'){
                $color = '#924ACE';
            }

        return response()->json([
            'id' => $aktivitas->id,
            'start' => $aktivitas->start_date,
            'end' => $aktivitas->end_date,
            'title' => $aktivitas->title,
            'color' => $color ? $color : '',
        ]); 
    }
    public function update(Request $request,$id)
    {
        $aktivitas = Aktivitas::find($id);
        if (! $aktivitas) {
            return response()->json([
                'error' => 'enable to locate the event'
            ], 404);
        }
        $aktivitas->update([
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);
        return response()->json('Event updated');
    }
    public function destroy($id)
    {
        $aktivitas = Aktivitas::find($id);
        if (! $aktivitas) {
            return response()->json([
                'error' => 'enable to locate the event'
            ], 404);
        }
        $aktivitas->delete();
        return $id;

    }
    


}
