<?php

namespace App\Http\Controllers;

use App\Models\cita;
use Illuminate\Http\Request;

class citaAdminController extends Controller
{
    public function index(){
        $citas = cita::all();

        return view('verCitaAdmin', compact('citas'));
    }

    public function destroy(cita $citas){
        $citas->delete();
        return view('verCitaAdmin', compact('citas'));
    }
}
