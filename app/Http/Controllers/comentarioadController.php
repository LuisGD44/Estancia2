<?php

namespace App\Http\Controllers;

use App\Models\comentarios;
use Illuminate\Http\Request;

class comentarioadController extends Controller
{
    public function index(){
        $comentarios = Comentarios::all();

        return view('comentariosad', compact('comentarios'));
    }
}
