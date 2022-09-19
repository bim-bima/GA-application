<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AktivitasController extends Controller
{
    public function index()
    {
        return view('app.aktivitas.index');
    
    }
    public function calendar()
    {
        return view('app.aktivitas.calendar');
    }
}
