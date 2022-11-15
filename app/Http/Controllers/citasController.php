<?php

namespace App\Http\Controllers;

use App\Models\cita;
use Illuminate\Http\Request;
use App\Http\Controllers\swal;

class citasController extends Controller
{
    public function index(){
        return view('cita');
    }
    
    public function store(Request $request)
    {
        $cita = new cita();

        $cita->name = $request->name;
        $cita->email = $request->email;
        $cita->numero = $request->numero;
        $cita->fecha = $request->fecha;
        $cita->hora = $request->hora;
        $cita->empleado = $request->empleado;
        $cita->barberia = $request->barberia;
        $cita->save();

        return view('cita');
    }
}
