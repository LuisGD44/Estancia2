<?php

namespace App\Http\Controllers;


use App\Models\comentarios;
use Comentario;
use Illuminate\Http\Request;

class verComentarios extends Controller
{
    public function index(){
        $comentarios = Comentarios::all();

        return view('verComentarios', compact('comentarios'));
    }
    public function store(){
        
    }

    public function destroy(comentarios $comentario){
        $comentario->delete();
        return view('vistaEmpleados', compact('comentarios'));
    }
}
