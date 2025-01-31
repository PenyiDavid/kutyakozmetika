<?php

namespace App\Http\Controllers;

use App\Models\Foglalas;
use Illuminate\Http\Request;

class FoglalasController extends Controller
{
    public function index()
    {
        $foglalasok = Foglalas::where('ido', "like", '%%:00')
        ->orWhere('ido', "like", '%%:15')->get(); //lazy
        //$foglalasok = Foglalas::with('user')->get(); //eager, de nincs kapcsolat a modelben
        return view('foglalasok.index', compact('foglalasok'));
    }

    public function show($id)
    {
        $foglalas = Foglalas::find($id);
        return view('foglalasok.show', compact('foglalas'));
    }
}
