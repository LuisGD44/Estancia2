<?php

namespace App\Http\Controllers;

use App\Models\cita;
use Illuminate\Http\Request;

class mostrarCitaController extends Controller
{
    public function index(){
        $citas = cita::all();

        return view('mostrarCita',compact('citas'));
    }
    public function store(){
        
    }
    public function destroy(cita $citas){
        $citas->delete();
        return view('vistaEmpleados',compact('citas'));
    }
}
