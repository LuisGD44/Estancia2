<?php

namespace App\Http\Controllers;

use App\Models\trabajo;
use Illuminate\Http\Request;
use Trabajo as GlobalTrabajo;

class trabajoController extends Controller
{
    public function index(){
        return view('registrarTrabajo');
    }
    public function store(Request $request)
    {
      $trabajo = new trabajo();
        $trabajo->nombre = $request->nombre;
        $trabajo->servicio = $request->servicio;
        $trabajo->costo = $request->costo;
        $trabajo->observaciones = $request->observaciones;
        
        $trabajo->save();
        return view('empleados');
         
    }
}
